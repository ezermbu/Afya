const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click',() => {
    sideMenu.style.display = 'block';
}) 

closeBtn.addEventListener('click',()=> {
    sideMenu.style.display = 'none';
})

themeToggler.addEventListener('click',()=> {
    document.body.classList.toggle('dark-theme-variables');
    themeToggler .querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler .querySelector('span:nth-child(2)').classList.toggle('active');
})


const Orders = [{
    Dateheure : '17/07/2024 17:00',
    RythmeC : '101',
    TemperatureC : '34',
    FrequenceR : '45',
    Status : 'vérifier'
},
{
    Dateheure : '17/07/2024 17:00',
    RythmeC : '101',
    TemperatureC : '34',
    FrequenceR : '45',
    Status : 'vérifier'
},
{
    Dateheure : '17/07/2024 17:00',
    RythmeC : '101',
    TemperatureC : '34',
    FrequenceR : '45',
    Status : 'vérifier'
},
]

Orders.forEach(Orders =>{
    const tr = document.createElement('tr');
    const trContent = `
            <tr>
                <td>${Orders.Dateheure}</td>
                <td>${Orders.RythmeC}</td>
                <td>${Orders.TemperatureC}</td>
                <td>${Orders.FrequenceR}</td>
                <td class="warning">${Orders.Status}</td>
                <td class="primary">Details</td>
            </tr>
    `;
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
})

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getDatabase, ref, onValue } from "firebase/database";

// Your web app's Firebase configuration
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
const database = getDatabase(app);

// Reference to your data in Firebase
const dataRef = ref(database, 'path/to/your/data');

// Listen for changes in the data
onValue(dataRef, (snapshot) => {
  const data = snapshot.val();

  // Update your HTML elements with the retrieved data
  document.getElementById('rythmec').textContent = data.Rythme_Cardiaque     + " Bpm";
  document.getElementById('tempc').textContent = data.Temperature_corporelle + " C";
  document.getElementById('freqr').textContent = data.Frequence_respiratoire + " Cpm";
  document.getElementById('pressionp').textContent = data.pressionp + " Pa";
  document.getElementById('satuo').textContent = data.satuo + " Spo";
  document.getElementById('tempa').textContent = data.Temperature_ambiante + " C";
});
