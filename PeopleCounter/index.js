let count = 0
let newCount = document.getElementById("count-entry")

function increment(){
    count += 1
    newCount.innerText = count
}

function decrement(){

    if (count > 0){
        count -= 1
        newCount.innerText = count
    } else {
        alert("Number Cannot Be Negative")
    }
}

// Getting Time

function getCurrentDateTime() {
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    var date = new Date();

    var month = months[date.getMonth()];
    var dayOfMonth = date.getDate();
    var year = date.getFullYear();

    var hours = String(date.getHours()).padStart(2, '0');
    var minutes = String(date.getMinutes()).padStart(2, '0');
    var seconds = String(date.getSeconds()).padStart(2, '0');

    var formattedDate = `${month} ${dayOfMonth} ${year} ${hours}:${minutes}:${seconds}`;
    
    return formattedDate;
}

//Recording Entries

let currentDateTime = getCurrentDateTime();

function save() {
 
    if(count <= 0){
        alert("Enter Number of Persons")
    } else {
        let time = currentDateTime
        let entry = "Number of People:  " + count + "   |   Time: " + time
        let entryList = document.getElementById("entry-list")
        let listItem = document.createElement("li")
        listItem.textContent = entry;
        entryList.appendChild(listItem);
    }
}

