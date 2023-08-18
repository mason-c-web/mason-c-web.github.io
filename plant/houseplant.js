//aSBzdXJlIGxvdmUgcGl6emE=
var waterLevel = 15;
var happiness = 20;
var sunshine = 10;
var inSun = true;
var moves = 0;
var daynum = 10;
var hintcount = 3;
var active = false;

function toggleSun() {
  if (document.getElementById("Sun").innerHTML == "   Move  to  Shade   ") {
    document.getElementById("Sun").innerHTML = "Move to Sunlight";
    inSun = false;
    document.getElementById("output").innerHTML =
      "You move the plant to a shady spot. It seems happy there.";
  } else {
    document.getElementById("Sun").innerHTML = "   Move  to  Shade   ";
    inSun = true;
    document.getElementById("output").innerHTML =
      "You move the plant to a sunny spot. It seems happy there.";
  }
  timePassing();
}

function encouage() {
  happiness += 3;
  document.getElementById("output").innerHTML =
    " 'You can do it little buddy!' you tell the plant. Nothing seems to happen.";
  timePassing();
}

function water() {
  waterLevel += 3;
  document.getElementById("output").innerHTML =
    "You sprinkle some water on the plant.";
  timePassing();
}

function timePassing() {
  waterLevel -= 1;
  happiness -= 1;
  if (inSun == false) {
    sunshine -= 1;
  } else {
    sunshine += 1;
  }
  moves += 1;
  if (moves % 3 == 2) daynum -= 1;
  document.getElementById("daycount").innerHTML = daynum;

  picture();

  if (moves >= 30) {
    document.getElementById("image").src = "win.gif";
    document.getElementById("buttons").style.display = "none";
    document.getElementById("playAgain").style.display = "block";
    document.getElementById("output").innerHTML =
      "Congratulations! You didn't kill your plant. Your score was " + score();
    active = false;
  }

  if (
    waterLevel < 1 ||
    sunshine < 1 ||
    happiness < 1 ||
    waterLevel > 30 ||
    sunshine > 20
  ) {
    active = false;
    console.log("I made it to this loop");
    document.getElementById("buttons").style.display = "none";

    document.getElementById("image").src = "ded.png";

    document.getElementById("playAgain").style.display = "block";

    if (waterLevel < 1) {
      document.getElementById("output").innerHTML =
        "Your plant died from lack of water.";
    } else if (sunshine < 1) {
      document.getElementById("output").innerHTML =
        "Your plant died from not enough sun.";
    } else if (happiness < 1) {
      document.getElementById("output").innerHTML =
        "Your plant died of a broken heart.";
    } else if (waterLevel > 30) {
      document.getElementById("output").innerHTML =
        "Your plant died from drowning.";
    } else if (sunshine > 20) {
      document.getElementById("output").innerHTML =
        "Your plant dried out in the hot hot sun.";
    }
  }
}

function score() {
  var score = (waterLevel + sunshine) * happiness;
  return score;
}

function start() {
  document.getElementById("buttons").style.display = "block";
  document.getElementById("intro").style.display = "none";
  document.getElementById("image").src = "happy.gif";
  active = true;
}

function check() {
  if (active == false) {
    return;
  }

  hintcount -= 1;
  if (hintcount == 0) {
    document.getElementById("hint").style.display = "none";
  }

  if (waterLevel >= 10 && waterLevel < 23) {
    document.getElementById("output").innerHTML = "The soild looks moist.";
  } else if (waterLevel >= 24) {
    document.getElementById("output").innerHTML =
      "The soild is too wet! You're going to drown your plant!";
  } else {
    document.getElementById("output").innerHTML =
      "Hmmm, the soild looks a little dry.";
  }
  var sunStats = document.createElement("p");
  if (sunshine >= 5 && sunshine < 25) {
    comment = "The leaves looks green! Looking good!";
  } else if (sunshine >= 25) {
    comment = "The leaves are drying out in the harsh sun!";
  } else {
    comment = "The leaves are looking withered. Maybe they need some sun?";
  }
  sunStats.textContent = comment;
  document.getElementById("output").appendChild(sunStats);

  var hapStats = document.createElement("p");
  if (happiness >= 25) {
    var comment = "Your plant looks happy as can be!";
  } else if (happiness >= 10) {
    var comment = "Your plant looks content.";
  } else {
    var comment =
      "Your plant is sad. Maybe it could use some encouragement? (Couldn't we all?) ";
  }
  hapStats.textContent = comment;
  document.getElementById("output").appendChild(hapStats);
  timePassing();
}

function playAgain() {
  document.getElementById("buttons").style.display = "block";
  document.getElementById("hint").style.display = "block";
  document.getElementById("playAgain").style.display = "none";
  document.getElementById("output").innerHTML = " ";
  document.getElementById("daycount").innerHTML = "10";
  document.getElementById("image").src = "happy.gif";
  waterLevel = 15;
  happiness = 20;
  sunshine = 10;
  inSun = true;
  moves = 0;
  daynum = 10;
  hintcount = 3;
  active = true;
}

function nothing() {
  document.getElementById("output").innerHTML =
    "Plants don't really need that much care. Right?";
  timePassing();
}

function picture() {
  if (happiness >= 10 && waterLevel >= 10 && 25 < sunshine < 5) {
    document.getElementById("image").src = "happy.gif";
  } else {
    document.getElementById("image").src = "sad.gif";
  }

  if (happiness < 5 || waterLevel < 5 || sunshine < 5) {
    document.getElementById("image").src = "sadder.gif";
  }
}
