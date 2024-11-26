// Ensure Three.js is loaded
import * as THREE from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js';
import { GLTFLoader } from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/examples/jsm/loaders/GLTFLoader.js';

document.addEventListener("DOMContentLoaded", function () {
    // Get the container element where the 3D model will be displayed
    const container = document.getElementById('model-container');

    // Create the scene
    const scene = new THREE.Scene();

    // Set up the camera
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 5; // Set camera position

    // Create the renderer
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(container.offsetWidth, container.offsetHeight);
    container.appendChild(renderer.domElement); // Append renderer to the container

    // Add ambient light
    const light = new THREE.AmbientLight(0x404040, 1); // Soft white light
    scene.add(light);

    // Get the model path dynamically from PHP using `data-model-path` attribute
    const modelPath = document.getElementById('model-container').getAttribute('data-model-path');

    // Load the 3D model using the dynamically generated path
    const loader = new GLTFLoader();
    loader.load(modelPath, function (gltf) {
        scene.add(gltf.scene); // Add the loaded model to the scene
        gltf.scene.scale.set(1, 1, 1); // Scale the model if needed
        gltf.scene.position.set(0, 0, 0); // Position the model
    }, undefined, function (error) {
        console.error(error); // Handle loading errors
    });

    // Animation loop to render the scene
    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera); // Render the scene from the camera's view
    }

    animate();
});
