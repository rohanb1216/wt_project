var puzzle="puzzle";
class roomclass {
    constructor(puzzleType, special,page) {
        this.code = "";
    }
    codeGenerate() {
        var str = '';
        var res = '';
        for (var j = 0; j < 2; j++) {
            var randByte = parseInt(Math.random() * 16, 10).toString(16);
            res += randByte;
        }
        str += res;
        str += "\n";
        this.code = str;
    }
}

function assignPlayer(playerobj){
    var username = document.getElementById("dropdownMenuButton");
    playerobj.username = username.innerText;


}

function travel(currRoom, nextRoom) {
    if (room[currRoom] || room[nextRoom]) {
        window.location.href = "../views/"+nextRoom+".html";
    }
}
function solved(currRoom) {
    //placeholder;  Replace with function to set value on server
    room[currRoom]=true;
}

function hide(element) {
    var ele = document.getElementById(element);
    ele.classList.toggle("Active");
    ele.classList.toggle("Inactive");
}

// window.onload=function(){
//     var hidebtn = document.getElementById("hide");
//     hidebtn.addEventListener("click",function(){
//         hide("navbar");
//         if(hidebtn.innerHTML=="v"){
//             hidebtn.innerHTML="^";
//         }
//         else{
//             hidebtn.innerHTML="v";
//         }
//     },false);
// };
room1 = new roomclass("cipher", false, "roomno");
room1.codeGenerate();
console.log(room1.code);

var player = {
    username : "",
    //This consists of boolean values of which rooms are unlocked and which aren't
    //The room no. is mapped to the index of this array. 0 signifies starting room and 15 signifies ending room 
    roomUnlockStatus : [],
    currRoom : 0,
    timeElasped : 0,
    

};