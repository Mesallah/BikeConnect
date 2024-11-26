// Import the THREE.js library
import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";
import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

// Create a Three.JS Scene
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

let object;
let controls;

// Variable to keep track of the total width of stacked models
let totalWidth = 0; 

// Instantiate a loader for the .glb file
const loader = new GLTFLoader();

// Load the initial model
loadModel('models/bottombracket/SRAM_XG-1150.glb');

// Instantiate a new renderer and set its size to the container
const container = document.getElementById("container3D");
const renderer = new THREE.WebGLRenderer({ alpha: true });
renderer.setSize(container.offsetWidth, container.offsetHeight);
container.appendChild(renderer.domElement);

// Set the camera position
camera.position.z = 50;

// Add lights to the scene
const topLight = new THREE.DirectionalLight(0xffffff, 1);
topLight.position.set(500, 500, 500);
topLight.intensity = 3.5;
scene.add(topLight);

const ambientLight = new THREE.AmbientLight(0x333333, 1);
scene.add(ambientLight);

// Add OrbitControls to the camera
controls = new OrbitControls(camera, renderer.domElement);

// Render loop
function animate() {
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}
animate();

// Add a listener to resize the canvas when the window is resized
window.addEventListener("resize", function () {
    const containerWidth = container.offsetWidth;
    const containerHeight = container.offsetHeight;

    camera.aspect = containerWidth / containerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(containerWidth, containerHeight);
});

// Function to load models and add them to the scene
function loadModel(modelPath) {
    // Load the new model
    loader.load(modelPath, function (gltf) {
        const newObject = gltf.scene; // Store the new object
        newObject.scale.set(8.5, 8.5, 8.5); // Set the scale

        // Calculate the bounding box for the new model
        newObject.traverse((child) => {
            if (child.isMesh) child.geometry.computeBoundingBox();
        });

        // Ensure the bounding box is available before trying to access it
        if (newObject.children[0] && newObject.children[0].geometry.boundingBox) {
            const modelWidth = newObject.children[0].geometry.boundingBox.max.x * 8.5; // Get width from bounding box

            // Set the position of the new model to the right of the previous models
            newObject.position.x = totalWidth + (modelWidth / 2); // Position it to the right of the last model
            totalWidth += modelWidth; // Update total width with the new model's width
        }

        scene.add(newObject); // Add the new model to the scene
    },
    function (xhr) {
        console.log((xhr.loaded / xhr.total * 100) + '% loaded');
    },
    function (error) {
        console.error('Error loading model:', error);
    });
}

// Handle model selection
document.querySelectorAll('.option').forEach(button => {
    button.addEventListener('click', function() {
        const selectedModel = this.getAttribute('data-model');
        console.log("Model selected:", selectedModel); // Debugging log

        // Define model paths based on selection
        const modelPaths = {
            'shimanofronthub': 'models/bottombracket/shimanofronthub.glb',
            'anotherModel': 'models/anotherModel.glb',
            'thirdModel': 'models/thirdModel.glb'
        };

        loadModel(modelPaths[selectedModel]); // Load the new model
    });
});
