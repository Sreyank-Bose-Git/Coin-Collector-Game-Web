let counter = 0;

function increaseScore() {
    counter++;
    document.getElementById("score").innerHTML = counter;
}

function changePositionOfCoin() {

    let randomPosTop = Math.floor(Math.random() * 500);
    let randomPosLeft = Math.floor(Math.random() * 500);

    let style = document.getElementById("coin").style;
    
    style.top = `${randomPosTop}px`;
    style.left = `${randomPosLeft}px`;
}
function reset() {
    counter = 0;
    document.getElementById("score").innerHTML = counter;
}
function exitWithSave() {
    const currentScore = document.getElementById("score").innerHTML;
    sessionStorage.setItem("PS",currentScore);
    window.location.assign("../Home/Home.php");
}
function exitWithoutSave() {
    window.location.assign("../Home/Home.php");
}