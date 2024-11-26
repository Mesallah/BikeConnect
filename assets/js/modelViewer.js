import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.152.2/build/three.module.js';
import { GLTFLoader } from 'https://cdn.jsdelivr.net/npm/three@0.152.2/examples/jsm/loaders/GLTFLoader.js';

// Function to initialize the 3D model viewer
export function initModelViewer(containerId, modelPath) {
    const container = document.getElementById(containerId);

    if (!container) {
        console.error(`Container with ID '${containerId}' not found.`);
        return;
    }

    // Three.js scene setup
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    // Add lighting
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(10, 10, 10);
    scene.add(light);
    const ambientLight = new THREE.AmbientLight(0x404040, 1); // Soft light
    scene.add(ambientLight);

    // Load the model
    const loader = new GLTFLoader();
    loader.load(
        modelPath,
        function (gltf) {
            const model = gltf.scene;
            scene.add(model);
            model.position.set(0, -1, 0);
            model.scale.set(1, 1, 1);

            // Adjust camera position to fit the model
            camera.position.z = 5;
        },
        undefined,
        function (error) {
            console.error('An error occurred while loading the model:', error);
        }
    );

    // Animation loop
    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }
    animate();

    // Handle window resizing
    window.addEventListener('resize', () => {
        const width = container.clientWidth;
        const height = container.clientHeight;
        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    });
}
