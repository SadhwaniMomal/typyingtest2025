

if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

// Reset scroll position on page load
window.onload = function() {
    window.scrollTo(0, 0);
};
window.onload = function() {
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector("#btn");
    const searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", function() {
        toggleSidebar();
    });

    searchBtn.addEventListener("click", function() {
        toggleSidebar();
    });

    function toggleSidebar() {
        sidebar.classList.toggle("open");
        menuBtnChange();
    }

    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            // Add event listener to close sidebar on body click
            document.body.addEventListener("click", closeSidebarOnClick);
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            // Remove event listener when sidebar is closed
            document.body.removeEventListener("click", closeSidebarOnClick);
        }
    }

    function closeSidebarOnClick(event) {
        // Close the sidebar if the click is outside the sidebar
        if (!sidebar.contains(event.target)) {
            sidebar.classList.remove("open");
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            document.body.removeEventListener("click", closeSidebarOnClick);
        }
    }
}
const typing_text = document.querySelector('.text-of-typing p');
const inputField = document.querySelector('.container .input-field');
const errorTag = document.querySelector('.errors span');
const timeTag = document.querySelector('.time span');
const wpmTag = document.querySelector('.wpm span');
const cpmTag = document.querySelector('.cpm span');
const button = document.querySelector('button');
const switchMode = document.getElementById('switchMode');
const contentBox = document.querySelector('.content-box');
const typingText = document.querySelector('.content-box .text-of-typing p');

let characterIndex = 0;
let wordIndex = 0; // Track the current word index
let errors = 0;
let timer;
let maxTime = 120;
let timeLeft = maxTime;
let isTyping = 0;
let characters;

let currentWord = ""; // Track the current word being typed
let currentWordIndex = 0; // Track the current word index

document.addEventListener("DOMContentLoaded", function() {
    const darkModeToggle = document.getElementById("darkModeToggle");
    const body = document.body;

    // Check if the user's preference is stored
    const userPreference = localStorage.getItem("darkMode");

    // Set the initial mode based on the stored preference
    if (userPreference === "dark") {
        darkModeToggle.checked = true;
        body.classList.add("dark-mode");
    }

    darkModeToggle.addEventListener("change", function() {
        if (darkModeToggle.checked) {
            body.classList.add("dark-mode");
            localStorage.setItem("darkMode", "dark");
        } else {
            body.classList.remove("dark-mode");
            localStorage.setItem("darkMode", "light");
        }
    });
});
const userPreference = localStorage.getItem("darkMode");
const toggleCheckbox = document.getElementById("darkModeToggle");
const tooltipdarkmood = document.querySelector(".tooltipdarkmood");

toggleCheckbox.addEventListener("change", function() {
    if (toggleCheckbox.checked) {
        tooltipdarkmood.style.visibility = "hidden";
        tooltipdarkmood.style.opacity = 0;
    }
});
// Set the initial mode based on the stored preference
if (userPreference === "dark") {
    document.body.classList.add("dark-mode");
}

function randomParagraph() {
    let randomIndex = Math.floor(Math.random() * paragraphs.length);
    typing_text.innerHTML = "";
    paragraphs[randomIndex].split("").forEach((span) => {
        let spanTag = `<span>${span}</span>`;
        typing_text.innerHTML += spanTag;
    });
    document.addEventListener('keydown', () => inputField.focus());
    typing_text.addEventListener('click', () => inputField.focus());
    characters = typing_text.querySelectorAll('span'); // Assign characters within the randomParagraph function

    document.getElementById('text-container').scrollTop = 0;
}

randomParagraph();

function updateScroll() {
    const textContainer = document.getElementById('text-container');
    const lastCharacter = characters[characterIndex - 1];
    const bottomLine = textContainer.getBoundingClientRect().bottom;
    const lastCharacterBottom = lastCharacter.getBoundingClientRect().bottom;

    if (lastCharacterBottom > bottomLine - 3.6 * characters[0].offsetHeight) {
        textContainer.scrollTop += lastCharacterBottom - bottomLine + 3.6 * characters[0].offsetHeight;
    } else if (lastCharacterBottom < textContainer.getBoundingClientRect().top) {
        textContainer.scrollTop = lastCharacter.offsetTop - textContainer.offsetTop;
    }
}

let isFirstKeyPress = true;
inputField.addEventListener('keypress', function() {
    if (isFirstKeyPress) {
        isFirstKeyPress = false;
        switchMode.disabled = true;
    }
});

const tooltipexp = document.querySelector(".tooltipexp");

switchMode.addEventListener("change", function() {
    if (switchMode.checked) {
        tooltipexp.style.visibility = "hidden";
        tooltipexp.style.opacity = 0;
    }
});

// Set the default mode to "noob"
const defaultMode = 'noob';

// Check if the user's preference is stored
const userPreference1 = localStorage.getItem('typingTestMode');

// Set the initial mode based on the stored preference
if (userPreference1 === 'pro') {
    contentBox.classList.remove('noob');
    contentBox.classList.add('pro');
    switchMode.checked = false; // Set switch button to "pro" position
} else {
    contentBox.classList.remove('pro');
    contentBox.classList.add('noob');
    switchMode.checked = true; // Set switch button to "noob" position
}

// Event listener for the switch button
switchMode.addEventListener('change', function() {
    if (this.checked) {
        // Switch to noob mode
        contentBox.classList.remove('pro');
        contentBox.classList.add('noob');
        // Store user preference in localStorage
        localStorage.setItem('typingTestMode', 'noob');
    } else {
        // Switch to pro mode
        contentBox.classList.remove('noob');
        contentBox.classList.add('pro');
        // Store user preference in localStorage
        localStorage.setItem('typingTestMode', 'pro');
    }
});

function initTyping() {
    let typedCharacter = inputField.value.split("")[characterIndex];
    if (characterIndex < characters.length && timeLeft > 0) {
        if (characterIndex === 0) {
            const startMessage = document.getElementById('start-message');
            startMessage.style.display = 'none';
        }
        if (!isTyping) {
            timer = setInterval(initTimer, 1000);
            isTyping = true;
        }
        if (typedCharacter == null) {
            characterIndex--;
            if (characters[characterIndex].classList.contains('incorrect')) {
                errors--;
                characters[currentWordIndex].classList.remove('incorrect-word');
            }
            characters[characterIndex].classList.remove('correct', 'incorrect');
        } else {
            if (characters[characterIndex].innerText === typedCharacter) {
                characters[characterIndex].classList.add('correct');
            } else {
                errors++;
                characters[characterIndex].classList.add('incorrect');
                characters[currentWordIndex].classList.add('incorrect-word');
            }
            characterIndex++;
        }
        characters.forEach((span, index) => {
            if (index === characterIndex) {
                span.classList.add('blinking-line');
            } else {
                span.classList.remove('blinking-line');
            }
        });
        updateScroll();

        // Check if a word is complete
        if (typedCharacter === ' ' || characterIndex === characters.length - 1) {
            currentWord = ""; // Reset the current word
            currentWordIndex = characterIndex + 1; // Update the current word index
        } else {
            currentWord += typedCharacter; // Build the current word
        }

        errorTag.innerText = errors;
        cpmTag.innerText = characterIndex - errors;
        let wpm = Math.round((((characterIndex - errors) / 5) / (maxTime - timeLeft)) * 60);
        wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
        wpmTag.innerText = wpm;
    } else {
        inputField.value = "";
        clearInterval(timer);
    }
}

inputField.addEventListener('input', initTyping);

function showLoadingLoader() {
    // Show the loading loader
    const loadingLoader = document.querySelector('.loader');
    loadingLoader.style.display = 'block';
    document.body.classList.add('waiting-for-achievement');
    document.querySelector('.container').style.display = 'none';

    // Show the card
    const card = document.getElementById('card');
    const card2 = document.getElementById('card2');
    const card3 = document.getElementById('card3');
    const bg1 = document.getElementById('bg1');
    card.style.display = 'none';
    card2.style.display = 'none';
    card3.style.display = 'none';
    bg1.style.display = 'none';

    // Hide it after 3 seconds and show the achievement box
    setTimeout(() => {
        card.style.display = 'block';
        card2.style.display = 'block';
        card3.style.display = 'block';
        bg1.style.display = 'block';
        loadingLoader.style.display = 'none';
        document.body.classList.remove('waiting-for-achievement');
        showAchievementBox();
        // Add a class to move the card down below the achievement box
        card.classList.add('move-down');
        card2.classList.add('move-down');
        card3.classList.add('move-down');
        bg1.classList.add('move-down');
    }, 3000);
}

function getRandomRemark(remarksArray) {
    const randomIndex = Math.floor(Math.random() * remarksArray.length);
    return remarksArray[randomIndex];
}

function initAchievementChart() {
    const achievementChartBox = document.querySelector('.achievement-chart-box');
    const achievementChartCanvas = document.getElementById('achievement-chart');
    const ctx = achievementChartCanvas.getContext('2d');
    const data = {
        labels: ['Accuracy', 'CPM', 'WPM'],
        datasets: [{
            data: [0, 0, 0],
            backgroundColor: ['rgba(196, 52, 33, 0.8)', 'rgba(78, 78, 194, 0.8)', 'rgba(212, 209, 32, 0.8)'],
            barPercentage: 0.9,
            categoryPercentage: 0.8,
            borderRadius: 10,
        }],
    };
    const options = {

        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false,
        },

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                },
            }],
        },
    };

    const achievementChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options,
    });

    achievementChartBox.style.display = 'block';

    return achievementChart;
}

function showAchievementBox() {
    // Show the achievement box
    const closeAchievementBtn = document.getElementById('close-achievement');
    closeAchievementBtn.addEventListener('click', function() {
        const achievementBox = document.querySelector('.achievement-box');
        achievementBox.style.display = 'none';
    });

    // Add event listener to the "Try Again" button inside the achievement box to restart the game
    const tryAgainAchievementBtn = document.getElementById('try-again-achievement-btn');
    tryAgainAchievementBtn.addEventListener('click', function() {
        location.reload();
        
    });

    // Add event listener to the "Home" button to go back to the typing page
    const homeBtn = document.getElementById('home-btn');
    homeBtn.addEventListener('click', function() {
        // Navigate back to the typing page (you can customize this based on your specific setup)
        window.location.href = "HOME.php";
    });

    const achievementBox = document.querySelector('.achievement-box');
    achievementBox.style.display = 'block';

    // Update achievement box content with the values
    const achievementAccuracy = document.getElementById('achievement-accuracy');
    const achievementWpm = document.getElementById('achievement-wpm');
    const achievementCpm = document.getElementById('achievement-cpm');
    const achievementRemarks = document.getElementById('achievement-remarks');

    const totalCharactersTyped = characterIndex + errors;
    const accuracy = (totalCharactersTyped === 0) ? '0%' : (((characterIndex - errors) / totalCharactersTyped) *
        100).toFixed(2) + "%";
    achievementAccuracy.textContent = accuracy;
    achievementWpm.textContent = wpmTag.innerText;
    achievementCpm.textContent = cpmTag.innerText;

    // Show the achievement chart
    const achievementChart = initAchievementChart();
    achievementChart.data.datasets[0].data = [parseFloat(accuracy), parseInt(cpmTag.innerText), parseInt(wpmTag
        .innerText)];
    achievementChart.update();
    // Show remarks based on the achieved WPM value
    const wpmValue = parseInt(wpmTag.innerText, 10);
    let remarks = '';

    // Remarks for WPM values above 100
    if (wpmValue >= 100) {
        const remarksAbove100 = [
            'Remarks: You have reached an absolutely outstanding typing speed!',
            'Remarks: Your typing speed is exceptional! Keep up the great work!',
            'Remarks: Wow! You are typing at a professional level.!',
            // Add more remarks above 100 if needed
        ];
        remarks = getRandomRemark(remarksAbove100);
    } else if (wpmValue >= 95) {
        const remarksAbove95 = [
            'Remarks: Excellent speed! You are impressive!',
            'Remarks: Your typing speed is top-notch! Keep it up!',
            'Remarks: Fantastic job! You are doing remarkably well!',
            // Add more remarks above 95 if needed
        ];
        remarks = getRandomRemark(remarksAbove95);
    } else if (wpmValue >= 90) {
        const remarksAbove90 = [
            'Remarks: Fantastic job! Your typing speed is outstanding!',
            'Remarks: Great effort! You are really fast!',
            'Remarks: You are doing exceptionally well with your typing!',
            // Add more remarks above 90 if needed
        ];
        remarks = getRandomRemark(remarksAbove90);
    } else if (wpmValue >= 85) {
        const remarksAbove85 = [
            'Remarks: Superb performance! Your typing speed is outstanding!',
            'Remarks: Incredible! Your typing is in a class of its own.!',
            'Remarks: Your typing is stellar and stands out prominently!',
            // Add more remarks above 85 if needed
        ];
        remarks = getRandomRemark(remarksAbove85);
    } else if (wpmValue >= 80) {
        const remarksAbove80 = [
            'Remarks: Impressive! Your typing stands out!',
            'Remarks: You are on fire! Your typing speed is impressive!',
            'Remarks: Exceptional! Your typing is in a class by itself!',
            // Add more remarks above 80 if needed
        ];
        remarks = getRandomRemark(remarksAbove80);
    } else if (wpmValue >= 75) {
        const remarksAbove75 = [
            'Remarks: You have a truly exceptional typing style!',
            'Remarks: Your typing is superb — truly exceptional!',
            'Remarks: The way you type is truly extraordinary!',
            // Add more remarks above 75 if needed
        ];
        remarks = getRandomRemark(remarksAbove75);
    } else if (wpmValue >= 70) {
        const remarksAbove70 = [
            'Remarks: Exceptional typing! You\'re setting a high standard!',
            'Remarks: Your typing skills are top-notch!',
            'Remarks: Exceptional typing! You\'re setting a high standard!',
            // Add more remarks above 70 if needed
        ];
        remarks = getRandomRemark(remarksAbove70);
    } else if (wpmValue >= 65) {
        const remarksAbove65 = [
            'Remarks: Fantastic job! Your skills are truly extraordinary!',
            'Remarks: Outstanding! Your typing is of the highest caliber!',
            'Remarks: Exceptional typing! You\'re doing very, very well!',
            // Add more remarks above 65 if needed
        ];
        remarks = getRandomRemark(remarksAbove65);
    } else if (wpmValue >= 60) {
        const remarksAbove60 = [
            'Remarks: Bravo! You\'re consistently demonstrating greatness!',
            'Remarks: Astounding work! You\'re doing exceptionally well!',
            'Remarks: Splendid! Your skills and dedication are outstanding!',
            // Add more remarks above 60 if needed
        ];
        remarks = getRandomRemark(remarksAbove60);
    } else if (wpmValue >= 55) {
        const remarksAbove55 = [
            'Remarks: Well done! Your achievements are truly remarkable!',
            'Remarks: Impressive typing skills! Your proficiency is notable!',
            'Remarks: Excellent! Your skills and efforts are truly praiseworthy!',
            // Add more remarks above 55 if needed
        ];
        remarks = getRandomRemark(remarksAbove55);
    } else if (wpmValue >= 50) {
        const remarksAbove50 = [
            'Remarks: Marvelous work! You\'re truly making a positive impact!',
            'Remarks: Amazing job! Your excellence is truly admirable!',
            'Remarks: Impressive performance! You\'re excelling in every way!',
            // Add more remarks above 50 if needed
        ];
        remarks = getRandomRemark(remarksAbove50);
    } else if (wpmValue >= 45) {
        const remarksAbove45 = [
            'Remarks: Your typing is superbly impressive — truly outclassing.',
            'Remarks: Your typing is stellar and stands out prominently',
            'Remarks: Your typing is incredibly exceptional and stands out.',
            // Add more remarks above 45 if needed
        ];
        remarks = getRandomRemark(remarksAbove45);
    } else if (wpmValue >= 40) {
        const remarksAbove40 = [
            'Remarks: Outstanding! You\'re doing exceptionally!',
            'Remarks: Well done! You\'re making valuable progress, keep it up!',
            'Remarks: You\'re doing wonderfully! Keep building on your success!',
            // Add more remarks above 40 if needed
        ];
        remarks = getRandomRemark(remarksAbove40);
    } else if (wpmValue >= 35) {
        const remarksAbove35 = [
            'Remarks: Fantastic effort! You\'re making a difference, keep it up!',
            'Remarks: Impressive effort! Keep building on the good work!',
            'Remarks: Bravo! You\'re moving forward, keep going!',
            // Add more remarks above 35 if needed
        ];
        remarks = getRandomRemark(remarksAbove35);
    } else if (wpmValue >= 30) {
        const remarksAbove30 = [
            'Remarks: Superb! You\'re doing a little more than before!',
            'Remarks: Well done! You\'re making little strides, keep it going!',
            'Remarks: Great progress! Keep doing a little more each day!',
            // Add more remarks above 30 if needed
        ];
        remarks = getRandomRemark(remarksAbove30);
    } else if (wpmValue >= 25) {
        const remarksAbove25 = [
            'Remarks: Keep practicing! You can do it better!',
            'Remarks: You have the potential! Keep pushing yourself!',
            'Remarks: Keep pushing your limits! Improvement comes with practice!',
            // Add more remarks above 25 if needed
        ];
        remarks = getRandomRemark(remarksAbove25);
    } else if (wpmValue >= 20) {
        const remarksAbove20 = [
            'Remarks: Not bad for a start! Keep improving!',
            'Remarks: Keep practicing! You are making progress!',
            'Remarks: Nice effort! Improvement takes time and dedication!',
            // Add more remarks above 20 if needed
        ];
        remarks = getRandomRemark(remarksAbove20);
    } else if (wpmValue >= 15) {
        const remarksAbove15 = [
            'Remarks: You\'re improving! Keep pushing yourself!',
            'Remarks: You can do better! Keep pushing yourself!',
            'Remarks: Keep going! You are capable of more!',
            // Add more remarks above 15 if needed
        ];
        remarks = getRandomRemark(remarksAbove15);
    } else {
        const remarksBelow15 = [
            'Remarks: Slow progress! Keep trying!',
            'Remarks: For improvement, more practice is needed',
            'Remarks: Improvement needed! Keep practicing!',
            // Add more remarks below 15 if needed
        ];
        remarks = getRandomRemark(remarksBelow15);
    }

    // Display the selected remark in the achievement box
    achievementRemarks.textContent = remarks;
}

function initTimer() {
    timeLeft--;
    switchMode.disabled = true;

    if (timeLeft <= 0) {
        clearInterval(timer);
        characters.forEach(span => span.classList.remove('blinking'));
        inputField.disabled = true;
        inputField.classList.add('disabled');

        // Hide the entire container when time is over
        document.querySelector('.container').style.display = 'none';

        // Show the loading loader
        showLoadingLoader();
    }

    // Convert the time from seconds to minutes and seconds format
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;
    const formattedTime = `${minutes}:${seconds.toString().padStart(2, '0')}`;

    timeTag.innerText = formattedTime;
    updateTimerColor();
}

function updateTimerColor() {
    const timerElement = document.querySelector('.time span');
    const timeRemaining = (timeLeft / maxTime) * 100;

    if (timeRemaining > 50) {
        timerElement.style.color = 'white';
    } else if (timeRemaining > 10) {
        timerElement.style.color = 'green';
    } else {
        timerElement.style.color = 'red';
    }
}

function resetGame() {
    location.reload();
    randomParagraph();
    updateTimerColor();
    inputField.value = "";
    clearInterval(timer);
    timeLeft = maxTime;
    characterIndex = 0;
    errors = 0;
    isTyping = 0;
    timeTag.innerText = timeLeft;
    errorTag.innerText = errors;
    wpmTag.innerText = 0;
    cpmTag.innerText = 0;
    document.querySelector('.achievement-box').style.display = 'none';

}
const tryAgainBtn = document.getElementById('try-again-btn');

tryAgainBtn.addEventListener('click', function() {

    location.reload();
});