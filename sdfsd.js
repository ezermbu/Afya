// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyB5197U0FLAC416YMoZcqDqSWIfmDv6yQg",
  authDomain: "afya-medical.firebaseapp.com",
  databaseURL: "https://afya-medical-default-rtdb.firebaseio.com",
  projectId: "afya-medical",
  storageBucket: "afya-medical.appspot.com",
  messagingSenderId: "787583211591",
  appId: "1:787583211591:web:81c89e7f78a1097e2a3962",
  measurementId: "G-45FF12QM9F"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);