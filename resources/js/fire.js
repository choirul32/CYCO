import firebase from "firebase";
import "firebase/firestore";

var firebaseConfig = {
    apiKey: "AIzaSyCgNyfJSpq7-lYXKND9_LumO1Rj3IJp89Q",
    authDomain: "cyco-5ffe3.firebaseapp.com",
    projectId: "cyco-5ffe3",
    storageBucket: "cyco-5ffe3.appspot.com",
    messagingSenderId: "767473178854",
    appId: "1:767473178854:web:390adee590efb6c9dfc327",
    measurementId: "G-3E9DW18ZM0"
};
  // Initialize Firebase
  var fire = firebase.initializeApp(firebaseConfig);
  export default fire;


