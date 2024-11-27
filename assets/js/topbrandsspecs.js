const modelPath = "<?php echo $part['model_path']; ?>";

// Log the model path to the console for debugging
console.log('Model path:', modelPath);

// Set up the scene, camera, and renderer
const canvas = document.getElementById('modelViewer');
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, canvas.clientWidth / canvas.clientHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer({ canvas, antialias: true });
renderer.setSize(canvas.clientWidth, canvas.clientHeight);

// Add lighting to the scene
const light = new THREE.DirectionalLight(0xffffff, 1);
light.position.set(10, 10, 10).normalize();
scene.add(light);

const ambientLight = new THREE.AmbientLight(0x404040, 2); // Soft light
scene.add(ambientLight);

// Load the GLTF model
const loader = new THREE.GLTFLoader();
loader.load(
    modelPath,
    (gltf) => {
        scene.add(gltf.scene);
        gltf.scene.position.set(0, 0, 0); // Adjust position
        gltf.scene.scale.set(1, 1, 1);   // Adjust scale
    },
    undefined,
    (error) => {
        console.error('Error loading 3D model:', error);
        console.error('Response content (if any):', error.target?.responseText);
    }
);

// Set camera position
camera.position.z = 5;

// Animation loop
function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}
animate();
