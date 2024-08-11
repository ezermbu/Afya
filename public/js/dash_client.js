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