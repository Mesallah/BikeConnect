import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";
import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

document.addEventListener("DOMContentLoaded", function() {
    // Create a basic scene
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize(window.innerWidth, 400); // Adjust for the container's size
    document.getElementById('model-container').appendChild(renderer.domElement);

    // Set up lighting
    const light = new THREE.AmbientLight(0x404040, 1); // Ambient light
    scene.add(light);

    const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
    directionalLight.position.set(5, 5, 5).normalize();
    scene.add(directionalLight);

    // Load the 3D model (using double quotes inside PHP)
    const loader = new GLTFLoader();
    loader.load("<?php echo base_url('assets/models/SRAM_XG-1150.glb'); ?>", function(gltf) {
        scene.add(gltf.scene); // Add the loaded model to the scene
        gltf.scene.scale.set(1, 1, 1); // Adjust the scale of the model
        gltf.scene.position.set(0, -1, 0); // Adjust the position if necessary
    }, undefined, function(error) {
        console.error(error);
    });

    // Camera position
    camera.position.z = 5;

    // Animation loop to render the scene
    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }

    animate();
});
