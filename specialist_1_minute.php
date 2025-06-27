<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FN6D6DKXMN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FN6D6DKXMN');
</script>
    <meta charset="UTF-8" />
    <title>TypingTwist.com - One_Minute_Specialist</title>
    <link rel="icon" href="logo2.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>

<style>
html {
    font-size: .94rem;

}

@media (max-width: 940px) {
    html {
        font-size: .9rem;


    }

}

@media (max-width: 880px) {
    html {
        font-size: .84rem;


    }

}

@media (max-width: 820px) {
    html {
        font-size: .77rem;


    }

}


@media (max-width: 730px) {
    html {
        font-size: .77rem;

        .background {
            display: none;
        }
         .background.move-down {
        display: none !important;
    }

    }

}

@media (max-width: 700px) {
    html {
        font-size: .75rem;

        .background {
            display: none;
        }
        .background.move-down {
        display: none !important;
    }
    }

}


@media (max-width: 650px) {
    html {
        font-size: .71rem;



    }

}

@media (max-width: 600px) {
    html {
        font-size: .68rem;



    }

}


@media (max-width: 570px) {
    html {
        font-size: .65rem;


    }

}

@media (max-width: 540px) {
    html {
        font-size: .63rem;

    }

}

@media (max-width: 520px) {
    html {
        font-size: .6rem;

    }

}

@media (max-width: 490px) {
    html {
        font-size: .56rem;


    }




}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;

}

body {
    min-height: 100vh;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    font-size: 1.25rem;
    margin: 0;
    padding: 0;


}

/* Default mode background gradient */
body:not(.dark-mode) {
    background: rgb(221, 241, 255);
    background: linear-gradient(90deg, rgba(221, 241, 255, 1) 0%, rgba(209, 242, 255, 1) 47%, rgba(211, 241, 255, 1) 100%);
}

/* Dark mode background color */
body.dark-mode {
    background-color: #222;
    color: #fff;
}



.container {
    background: rgb(243, 252, 255);
    background: linear-gradient(90deg, rgba(243, 252, 255, 1) 0%, rgba(242, 250, 255, 1) 47%, rgba(240, 250, 255, 1) 100%);
    border-radius: 1.25rem;
    padding: 1rem;
    position: absolute;
    margin-top: 20rem;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 0.1rem solid #bac8de;
    width: 48rem;
    align-items: center;
    justify-content: center;
}




.container .input-field {
    z-index: -999;
    opacity: 0;
    position: absolute;
}

.content-box .text-of-typing {
    max-height: 21.875rem;
    /* 350px */
    max-width: 38rem;
    /* 600px */
    overflow: hidden;
}

.content-box .text-of-typing::-webkit-scrollbar {
    width: 0;
}

.dark-mode {
    --blinking-color: white; /* Color for dark mode */

    .container {
        background: #2b2b2b;

    }

    .paragraphsection {
        background: #3f3f40;
        color: white;
    }

    .flip-card-front {
        background: #3f3f40;
    }

    .paragraphtext {
        color: white;
    }

    .paragraphtext1 {
        color: white;
    }

    .content-box.noob .text-of-typing p {
        color: white;
    }

    .content-box.pro .text-of-typing p {
        color: white;
    }

    #start-message {
        color: white;
    }

    .background {
        background: #2b2b2b;
    }

    .container button {
        background: #2b2b2b;
    }

    .achievement-box {
        background: #2b2b2b;
    }

    .achievement-chart-box {
        background: #2b2b2b;
    }

    button#home-btn {
        background: #2b2b2b;
    }

    button#try-again-achievement-btn {
        background: #2b2b2b;
    }

    #achievement-remarks {
        color: white;
    }

    .sidebar {
        background: #666666;
    }

    .sidebar li a {
        background: none;
    }

    .sidebar .logo_details #btn {
        background: #666666;
    }

    footer {
        color: white;
    }
    

}

.content-box.noob .text-of-typing p {
    text-align: justify;
    font-size: 2.15625rem;
    /* 34.5px */
    letter-spacing: 0.2rem;
    word-spacing: .9rem;
    /* 2px */
    line-height: 2.5;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #000;
    margin-top: -.5rem;
}

.content-box.pro .text-of-typing p {
    text-align: justify;
    font-size: 2rem;
    /* 32px */
    line-height: 1.78;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    color: #000;


}

.content-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.content-box .content {
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 17%;
    text-align: center;
    line-height: 1.25rem;
    /* 20px */
}

.content .result {
    padding: 1.3rem;
    /* 19px */
    border-radius: 3.625rem;
    /* 10px */
    display: block;
    text-shadow: 0 0 0.2rem rgba(0, 0, 0, 0.5);

}

.content .result li {

    /* 1px */
    list-style: none;
}

.content .result li:last-child {
    border-bottom: none;

}

.result li.time,
.result li.errors,
.result li.wpm,
.result li.cpm {
    font-size: 1.16rem;
    color: WHITE;

    /* 20px */
}

.result li.time p,
.result li.errors p,
.result li.wpm p,
.result li.cpm p {

    margin-bottom: .2rem;


}

.container button {
    position: absolute;
    cursor: pointer;
    font-size: .9rem;
    /* 18px */
    letter-spacing: 0.125rem;
    /* 2px */
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    padding: 0.4rem 1.3rem;
    border: 0.1rem solid #bac8de;
    /* 3.5px */
    border-radius: 0.125rem;
    /* 2px */
    box-shadow: 0 0.125rem 0.625rem rgba(0, 0, 0, 0.16), 0 0.1875rem 0.375rem rgba(0, 0, 0, 0.1);
    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    margin-top: -.4rem;
    /* 20px */

}

.container button:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}

.container button:hover,
.container button:focus {
    color: white;
    transform: scale(1.10);
}

.container button:hover:before,
.container button:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

.container button:active {
    transform: scale(0.9);
}

.text-of-typing p span.correct {
    color: rgb(15, 235, 15);
}

.text-of-typing p span.incorrect {
    color: rgb(236, 25, 25);
}

#page {
    display: flex;
    justify-content: center;
    align-items: center;
}

#container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin-top: 15rem;
}

#h3 {
    color: rgb(82, 79, 79);
    font-size: 1.625rem;
    /* 26px */
    margin-top: 1.25rem;
    text-align: center;
    line-height: 2.5rem;
    /* 40px */
}


#ring {
    width: 24.375rem;
    /* 390px */
    height: 24.375rem;
    /* 390px */
    border: 0.0625rem solid transparent;
    /* 1px */
    border-radius: 50%;
    position: absolute;
}


#ring:nth-child(1) {
    border-bottom: 0.5rem solid rgb(240, 42, 230);
    /* 8px */
    animation: rotate1 2s linear infinite;
}


@keyframes rotate1 {
    from {
        transform: rotateX(50deg) rotateZ(110deg);
    }

    to {
        transform: rotateX(50deg) rotateZ(470deg);
    }
}

#ring:nth-child(2) {
    border-bottom: 0.5rem solid rgb(240, 19, 67);
    animation: rotate2 2s linear infinite;
}

@keyframes rotate2 {
    from {
        transform: rotateX(20deg) rotateY(50deg) rotateZ(20deg);
    }

    to {
        transform: rotateX(20deg) rotateY(50deg) rotateZ(380deg);
    }
}

#ring:nth-child(3) {
    border-bottom: 0.5rem solid rgb(3, 170, 170);
    animation: rotate3 2s linear infinite;
}

@keyframes rotate3 {
    from {
        transform: rotateX(40deg) rotateY(130deg) rotateZ(450deg);
    }

    to {
        transform: rotateX(40deg) rotateY(130deg) rotateZ(90deg);
    }
}

#ring:nth-child(4) {
    border-bottom: 0.5rem solid rgb(207, 135, 1);
    animation: rotate4 2s linear infinite;
}

@keyframes rotate4 {
    from {
        transform: rotateX(70deg) rotateZ(270deg);
    }

    to {
        transform: rotateX(70deg) rotateZ(630deg);
    }
}

.achievement-box {
    display: none;
    position: absolute;
    margin-top: 18rem;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 1.8rem;
    border-radius: 1.5625rem;
    color: black;
    text-align: center;
    font-family: Arial, sans-serif;
    border: 0.1rem solid #bac8de;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    width: 45rem;


}

.achievement-box h2 {
    font-size: 2.5rem;
    /* 40px */
}

.achievement-box p {
    font-size: 2rem;
    /* 32px */
    margin: .1rem;
    /* 15px */
}


.achievement-box span {
    font-weight: bold;
    color: #ffc107;
}



button#try-again-achievement-btn {
    position: absolute;
    cursor: pointer;
    font-size: 0.9375rem;
    /* 15px */
    letter-spacing: 0.125rem;
    /* 2px */
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    font-style: normal;
    padding: 0.4375rem 1.25rem;
    /* 7px 20px */
    border: 0.1rem solid #bac8de;
    /* 3px */
    border-radius: 0.125rem;
    /* 2px */
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);

    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    margin-top: .5rem;
    /* 20px */
    margin-left: 9.5rem;
    /* 115px */
}

button#home-btn {
    position: absolute;
    cursor: pointer;
    font-size: 0.9375rem;
    /* 15px */
    letter-spacing: 0.125rem;
    /* 2px */
    font-style: normal;
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    font-weight: bold;
    padding: 0.4375rem 1.25rem;
    /* 7px 20px */
    border: 0.1rem solid #bac8de;
    /* 3px */
    border-radius: 0.125rem;
    /* 2px */
    color: #0084ff;
    text-decoration: none;
    transition: 0.3s ease all;
    z-index: 1;
    /* Set the background color to match the achievement box color */
    margin-left: -18.5rem;
    /* -280px */
    margin-top: .5rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    /* 20px */
}

/* Pseudo-element for the buttons */
button#try-again-achievement-btn:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}

button#home-btn:before {
    transition: 0.5s all ease;
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    bottom: 0;
    opacity: 0;
    content: '';
    background-color: #0084ff;
    z-index: -1;
}


/* Hover and focus styles for the buttons */
button#try-again-achievement-btn:hover,
.button#try-again-achievement-btn:focus {
    color: white;
    transform: scale(1.10);
}

button#home-btn:hover,
.button#home-btn:focus {
    color: white;
    transform: scale(1.10);
}

/* Pseudo-element hover and focus styles */
button#try-again-achievement-btn:hover:before,
.button#try-again-achievement-btn:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

button#home-btn:hover:before,
.button#home-btn:focus:before {
    transition: 0.5s all ease;
    left: 0;
    right: 0;
    opacity: 1;
}

/* Active style for the buttons */
button#try-again-achievement-btn:active {
    transform: scale(0.9);
}

button#home-btn:active {
    transform: scale(0.9);
}

/* Switch button styles */
.switch {
    font-size: 0.9rem;
    position: relative;
    display: inline-block;
    width: 10rem;
    /* Adjusted from 150px */
    height: 1.4rem;
    margin-left: 16.5rem;
    /* Adjusted from 18rem */
    margin-top: -1rem;
}

/* The slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    color: black;
    font-weight: 600;
    border-radius: 3rem;
    /* Adjusted from 30px */
    display: flex;
    justify-content: space-around;
    align-items: center;
    transition: 0.4s;
}

.slider:before {
    position: absolute;
    content: "Expert";
    height: 90%;
    width: 4.8rem;
    /* Adjusted from 48% */
    left: 2%;
    border-radius: 2rem;
    /* Adjusted from 20px */
    background-color: white;
    color: black;
    display: grid;
    align-content: center;
    justify-content: center;
    box-shadow: 0 0.1rem 0.1rem 0 rgba(0, 0, 0, 0.2), 0 0.2rem 0.4rem 0 rgba(0, 0, 0, 0.2), 0 -0.1rem 0 0 rgba(0, 0, 0, 0.1) inset, 0 -1.31rem 1.31rem -1.31rem rgba(0, 0, 0, 0.3) inset, 0 0 0.1rem 0 rgba(0, 0, 0, 0.1);
    text-shadow: 0 -0.1rem 0 rgba(0, 0, 0, 0.15);
    transition: 0.4s;
}

.slider:after {
    content: "";
    position: absolute;
    top: -0.7rem;
    /* Adjusted from -7px */
    left: -0.7rem;
    /* Adjusted from -7px */
    right: -0.7rem;
    /* Adjusted from -7px */
    bottom: -0.7rem;
    /* Adjusted from -7px */
    border-radius: 1.71rem;
    /* Adjusted from 1.71em */
    background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.06), rgba(0, 0, 0, 0.1));
    z-index: -1;
}

.switch input:checked+.slider {
    background-color: white;
    color: black;
}

.switch input:checked+.slider:before {
    content: "Normal";
    transform: translateX(100%);
    color: black;
}

.switch input {
    display: none;
}

.circle-container {
    display: flex;
    justify-content: space-between;
    margin-top: .25rem;
    /* 20px */
}

.circle {
    width: 11.75rem;
    /* 140px */
    height: 11.75rem;
    /* 140px */
    background-color: black;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    border: 0.1875rem solid #0084ff;
    /* 3px */
}

.circle-label {
    font-size: 2.1rem;
    /* 25px */
    font-weight: bold;

    color: black;
    text-decoration-color: #000;
}

.circle-value {
    font-size: 2rem;
    /* 29px */
    font-weight: bold;
    color: #0084ff;
    margin-top: -.5rem;
}

/* Add this CSS for the symbols */
.symbol {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    /* 32px */
    font-weight: bold;
    width: 2.5rem;
    /* 40px */
    height: 2.5rem;
    /* 40px */
    background-color: #0084ff;
    border-radius: 50%;
    color: white;
    margin-right: 0.0625rem;
    /* 1px */
    margin-top: 4.25rem;
    /* 52px */
}

.equal-symbol {
    font-size: 1.875rem;
    /* 30px */
}


.dark-mode-toggle {
    position: absolute;
    top: .15rem;
    /* 20px */
    right: .1rem;
    /* 20px */
    display: inline-block;
    border: 0.1rem solid #0084ff;
    /* 2px */
    border-radius: 1.9rem;

    height: 1.45rem;
    width: 3rem;


}

.toggle-label {
    display: flex;
    align-items: center;
    position: relative;
    cursor: pointer;
    padding: 0.3125rem;
    /* 5px */
    /* 15px */
    transition: background-color 0.3s;
    height: 1.3rem;
    width: 2.5rem;
    left: .27rem;


}

.toggle-checkbox {
    display: none;



}

.toggle-label::after {
    content: "";
    position: absolute;
    top: .1rem;
    /* 5px */
    left: -.1rem;
    /* 5px */
    width: 1.025rem;
    /* 26px */
    height: 1.025rem;
    /* 26px */

    border-radius: 50%;
    transition: left 0.3s;
    background-color: #000000;

}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.8125rem);
    /* 29px */


}


.toggle-checkbox:checked+.toggle-label::after {
    left: calc(100% - 1.3rem);
    /* 29px */
    background-color: white;
}

.dark-mode {
    background-color: #222;
    color: #fff;
}

#h3 {
    color: #0084ff;
}

#start-message {
    color: black;

    margin-left: -.7rem;
    /* -19px */

    font-size: 0.9375rem;
    /* 15px */
    margin-bottom: -1rem;
    /* -38px */
    border: 0.625rem;
    animation: bounce 1s infinite;
    margin-top: -1rem;
}

@keyframes bounce {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-0.9375rem);
        /* -15px */
    }
}


:root {
    --blinking-color: #00f; /* Default color for light mode */
}

.blinking-line {
    border-bottom: 0.125rem solid var(--blinking-color);
    animation: blink-border 0.5s infinite alternate;
}

@keyframes blink-border {
    0% {
        border-color: transparent;
    }

    100% {
        border-color: var(--blinking-color);
    }
}

#ul1 {
    background: black;
    margin-left: 2.95rem;
    /* 20px */
    height: 11.375rem;
    /* 230px */
    border: 0.1rem solid #0084ff;
    line-height: -3rem;

    /* 2px */
}

#t1 {
    margin-top: 2.8125rem;
    /* 45px */
}

#t2 {
    font-style: bold;
    font-size: 1.25rem;
    /* larger */
}

#Ach1 {
    font-size: 2.8125rem;
    /* 45px */
    color: #0084ff;
    font-weight: bold;
}

.tooltipexp {
    visibility: hidden;
    width: 10rem;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: .4rem;
    padding: .2rem;
    position: absolute;
    z-index: 1;
    bottom: 110%;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.4s;
    font-size: .8rem;
}

.switch:hover .tooltipexp {
    visibility: visible;
    opacity: 1;
}

.tooltipdarkmood {
    visibility: hidden;
    width: 3rem;
    /* Adjust the width as needed */
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 1rem;
    font-size: .8rem;
    position: absolute;
    z-index: 1;
    bottom: -30%;
    left: -40%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.4s;
}

.toggle-label:hover .tooltipdarkmood {
    visibility: visible;
    opacity: 1;
}

#achievement-remarks {
    font-size: 1.89rem;
}


:root {
    --color-default: #004f83;
    --color-second: #0067ac;
    --color-white: #fff;
    --color-body: #e4e9f7;
    --color-light: #e0e0e0;
}

.sidebar {
    min-height: 100vh;
    ;
    /* 100vh / 16px = 6.25rem */
    width: 4.875rem;
    /* 78px / 16px = 4.875rem */
    padding: 0.375rem 0.875rem;
    /* 6px / 16px = 0.375rem, 14px / 16px = 0.875rem */
    z-index: 99;
    background-color: #38bcd6;
    transition: all 0.5s ease;
    position: fixed;
    top: 0;
    left: 0;
}

.sidebar.open {
    width: 14.375rem;
    /* 230px / 16px = 14.375rem */
}

.sidebar .logo_details {
    height: 3.75rem;
    /* 60px / 16px = 3.75rem */
    display: flex;
    align-items: center;
    position: relative;
}

.sidebar .logo_details .icon {
    opacity: 0;
    transition: all 0.5s ease;
}

.sidebar .logo_details .logo_name {
    color: var(--color-white);
    font-size: 1.375rem;
    /* 22px / 16px = 1.375rem */
    font-weight: 600;
    opacity: 0;
    transition: all 0.5s ease;


}

.sidebar.open .logo_details .icon,
.sidebar.open .logo_details .logo_name {
    opacity: 1;
}

.sidebar .logo_details #btn {
    position: absolute;
    margin-top: 3rem;
    right: 0;
    transform: translateY(-50%);
    font-size: 2.4375rem;
    /* 23px / 16px = 1.4375rem */
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}

.sidebar.open .logo_details #btn {
    text-align: right;
    font-size: 2rem;
}

.sidebar i {
    color: var(--color-white);
    height: 3.75rem;
    /* 60px / 16px = 3.75rem */
    line-height: 3.75rem;
    min-width: 3.125rem;
    /* 50px / 16px = 3.125rem */
    font-size: 1.5625rem;
    /* 25px / 16px = 1.5625rem */
    text-align: center;

}

.sidebar .nav-list {
    margin-top: 1.25rem;
    /* 20px / 16px = 1.25rem */
    height: 100%;
}

.sidebar li {
    position: relative;
    margin: 0.5rem 0;
    /* 8px / 16px = 0.5rem */
    list-style: none;
    margin-top: 1.7rem;
}

.sidebar li .tooltip {
    position: absolute;
    top: -1.25rem;
    /* -20px / 16px = -1.25rem */
    left: calc(100% + 0.9375rem);
    /* 15px / 16px = 0.9375rem */
    z-index: 3;
    background-color: var(--color-white);
    box-shadow: 0 0.3125rem 0.625rem rgba(0, 0, 0, 0.3);
    /* 5px / 16px = 0.3125rem, 10px / 16px = 0.625rem */
    padding: 0.375rem 0.875rem;
    /* 6px / 16px = 0.375rem, 14px / 16px = 0.875rem */
    font-size: 0.9375rem;
    /* 15px / 16px = 0.9375rem */
    font-weight: 400;
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    color: #000;
    border: solid #38bcd6 .1rem;
}

.sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
}

.sidebar.open li .tooltip {
    display: none;
}

.sidebar input {
    font-size: 0.9375rem;
    /* 15px / 16px = 0.9375rem */
    color: var(--color-white);
    font-weight: 400;
    outline: none;
    height: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    width: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    border: none;
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    background-color: var(--color-second);
    transition: all 0.5s ease;
}

.sidebar input::placeholder {
    color: var(--color-light);
}



.sidebar.open input {
    width: 100%;
    padding: 0 1.25rem 0 3.125rem;
    /* 20px / 16px = 1.25rem, 50px / 16px = 3.125rem */
}

.sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    align-items: center;
    text-decoration: none;
    background-color: var(--color-default);
    position: relative;
    transition: all 0.5s ease;
    z-index: 12;
    background-color: #38bcd6;
}

.sidebar li a::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    transform: scaleX(0);
    background-color: var(--color-white);
    border-radius: 0.3125rem;
    /* 5px / 16px = 0.3125rem */
    transition: transform 0.3s ease-in-out;
    transform-origin: left;
    z-index: -2;
}

.sidebar li a:hover::after {
    transform: scaleX(1);
    color: var(--color-default);
}

.sidebar li a .link_name {
    color: var(--color-white);
    font-size: 1.4375rem;
    /* 15px / 16px = 0.9375rem */
    font-weight: 500;
    white-space: nowrap;
    pointer-events: auto;
    transition: all 0.4s ease;
    pointer-events: none;
    opacity: 0;
}

.sidebar li a:hover .link_name,
.sidebar li a:hover i {
    transition: all 0.5s ease;
    color: var(--color-default);
}

.sidebar.open li a .link_name {
    opacity: 1;
    pointer-events: auto;
}

.sidebar li i {
    height: 2.1875rem;
    /* 35px / 16px = 2.1875rem */
    line-height: 2.1875rem;
    font-size: 1.7rem;
    /* 18px / 16px = 1.125rem */
    border-radius: 0.3125rem;

    /* 5px / 16px = 0.3125rem */
}


@media (max-width: 730px) {

    /* Adjust the max-width value based on your design requirements */
    .sidebar {
        width: 0;
        padding: 0;
        transition: all 0.5s ease;

    }

    .sidebar.open {
        width: 13.375rem;
        /* or any width you want for the opened sidebar */

    }

    .sidebar .logo_details {
        display: flex;
        justify-content: space-between;
        padding: .375rem 1.75rem;

    }

    .logo_details {
        font-size: 2rem;
    }

    .sidebar .logo_details #btn {

        font-size: 3.5rem;
        color: white;
        background-color: #38bcd6;
    }

    .sidebar .logo_details .logo_name {

        display: none;

    }



    .sidebar.open .logo_details .logo_name {
        display: block;

    }

    .sidebar .nav-list {
        display: none;
    }

    .sidebar.open .nav-list {
        display: block;
    }

    .sidebar.open .logo_details #btn {
        text-align: right;
        font-size: 3rem;
    }
}

.achievement-chart-box {
    display: none;
    position: absolute;
    margin-top: 46rem;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 1.8rem;
    border-radius: 1.5625rem;
    color: black;
    text-align: center;
    font-family: Arial, sans-serif;
    border: 0.1rem solid #bac8de;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    width: 45rem;
    height: 22rem;

}

.flip-card.move-down {
    margin-top: 65rem;
    width: 13.85rem;
    /* Adjusted from 29rem */
    height: 16.26rem;

    #img {
        width: 13rem;
    }

}

.background.move-down {
    height: 181rem;
}



.flip-card {

    width: 13.85rem;
    /* Adjusted from 29rem */
    height: 16.26rem;
    /* Adjusted from 25.4rem */

    /* Adjusted from 100rem */
    font-family: sans-serif;
    font-style: normal;
    position: absolute;
    left: 50%;
    margin-top: 48.2rem;
    /* Adjusted from 35rem */


}

.title {
    font-size: 1.59rem;
    /* Adjusted from 1.5rem */

    text-align: center;
    margin: 0;
    color: #2a91d1;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    pointer-events: auto; /* Ensure the hover effect works on the card itself */

}

.flip-card:hover .flip-card-inner {
    transform: scale(0.9);
}

.flip-card-front {
    /* Adjusted from 0.8rem 1.4rem */
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border: 0.1rem solid #bac8de;
    /* Adjusted from 0.1rem */
    border-radius: 1.06rem;
    /* Adjusted from 1rem */
}

.flip-card-front {
    color: #00bbeb;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
}



#img {
    margin-top: .2rem;
    margin-left: .3rem;
    width: 13rem;
    height: 9.5rem;
    border-radius: 1rem;


}

.text3 {
    margin-left: -19rem;
        margin-top: -6rem;
        position: absolute;
        color: #2a91d1;
        font-weight: bold;
        font-size: 1.7rem;
        z-index: 1;
        border: 1rem solid none;
        border-style: none;
        width: 28rem;
        font-family: 'Arial Black', Gadget, sans-serif;
        text-transform: capitalize;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        pointer-events: none; /* Prevent the heading from triggering any hover effects */



}
.paragraphsection.move-down{
    margin-top: 90rem;
}
.paragraphsection {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 76rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    height: 63.5rem;
    width: 48rem;
    border-radius: 1rem;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
    background-color: #dfe8e5;
   
    padding: 1rem;
  
}

.paragraphtext {
    width: 25rem;
    position: absolute;
    margin-left: 1rem;
    font-size: 1.2rem;
    color: #000;
    font-weight: 500;
    font-style:normal;
}

.paragraphtext1 {
    width: 25rem;
    position: absolute;
    margin-left: 1rem;
    margin-top: 31.6rem;
    margin-left: 21rem;
    font-size: 1.2rem;
    color: #000;
    font-weight: 500;
    font-style:normal;
}

.btt {
    width: 12rem;
    height: 4rem;
    border: .1rem solid #343a40;
    border-radius: 3rem;
    transition: all 0.3s;
    margin-left: 16rem;
    background: white;
    font-size: 1rem;
    position: absolute;
    font-family: "Montserrat", sans-serif;
    margin-top: 65rem;
    color: black;
    font-style:normal;
}

.btt:hover {
    background: #343a40;
    color: white;
    font-size: 1.3rem;
}

.background {
    position: absolute;
    left: 50%;
    width: 57rem;
    height: 166.5rem;
    transform: translateX(-50%);
    z-index: -1;
    margin-top: -15rem;
    background: rgb(226, 247, 255);
    background: linear-gradient(90deg, rgba(226, 247, 255, 1) 0%, rgba(221, 239, 250, 1) 47%, rgba(225, 244, 255, 1) 100%);
    border: solid .1rem #32323233;

}
footer.move-down{
    margin-top: 161rem;
}
footer {

    color: black;
    padding: 20px;
    text-align: center;
    margin-top: 147rem;
    margin-left: -1.5rem;
    width: 100%;
    position: absolute;
    font-size: 1rem;
}

footer p {
    margin: 0;
}
.progress-bar {
    position: fixed;
    top: 0;
    left: 0;
    width: 0%;
    height: .17rem; /* Adjust height as needed */
    background-color: #007bff; /* Progress bar color */
    z-index: 1;
    opacity: 0; /* Initially hidden */
    transition: width 1s ease-in-out, opacity 0.3s ease-in-out;
    box-shadow: 0px .5rem .5rem rgba(0, 0, 0, 0.20);
}

@media screen and (min-width: 344px) and (max-width: 767px) {
    .container {
    padding: 4rem;
    
    }
    
.container button {
    margin-top: 2.1rem;
}   

.paragraphtext{
    width: 43rem;
    padding: 14px 17px 9px 17px;
}  
.paragraphtext1{
    width: 43rem;
    padding: 14px 17px 9px 17px;
    margin-left: 1rem;
}  
.sad-img , .happy-img{
display: none;
}
}
</style>

<body>
<div class="progress-bar" id="top-progress-bar"></div>
<div class="dark-mode-toggle" style="margin-top:.2rem;">
        <input type="checkbox" id="darkModeToggle" class="toggle-checkbox">
        <label for="darkModeToggle" class="toggle-label">
            <div class="tooltipdarkmood">Mood</div>
        </label>
    </div>
    <div class="sidebar">
        <div class="logo_details">

            <div class="logo_name">Typing Twist</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">

            <li>
                <a href="index.php">
                    <i class="bx bx-laptop"></i>
                    <span class="link_name">Typing Test</span>
                </a>
                <span class="tooltip">TYPING TEST</span>
            </li>
            <li>
                <a href="learntyping.php">
                    <i class="bx bx-search"></i>
                    <span class="link_name">Typing Lab</span>
                </a>
                <span class="tooltip">TYPING LAB</span>
            </li>
            <li>
                <a href="typinggame.php">
                    <i class="bx bx-joystick"></i>
                    <span class="link_name">Typing Games</span>
                </a>
                <span class="tooltip">TYPING GAMES</span>
            </li>
            <li>
                <a href="typingtips.php">
                    <i class="bx bx-star"></i>
                    <span class="link_name">Typing Tips</span>
                </a>
                <span class="tooltip">TYPING TIPS</span>
            </li>
            <li>
                <a href="feedback.php">
                    <i class="bx bx-comment"></i>
                    <span class="link_name">Feedback</span>
                </a>
                <span class="tooltip">FEEDBACK</span>
            </li>
            <li>
                <a href="contact.php">
                    <i class="bx bx-map-pin"></i>
                    <span class="link_name">Contact us</span>
                </a>
                <span class="tooltip">CONTACT US</span>
            </li>
            <li>
                <a href="blog.php">
                    <i class="bx bx-link"></i>
                    <span class="link_name">Blog</span>
                </a>
                <span class="tooltip">BLOG</span>
            </li>
        </ul>
    </div>
    <div>
        <footer class="ftt" id="ft">
        <p>&copy; 2024 Typing Twist. All rights reserved.</p>
        </footer>
    </div>
    <div class="background" id="bg1"></div>
    <div class="container">

        <div class="myclass">
            <label class="switch" for="switchMode">
                <input type="checkbox" id="switchMode" checked>
                <div class="slider">
                    <span>Expert</span>
                    <span>Normal</span>
                </div>
                <div class="tooltipexp">Select your Experience</div>
            </label>
        </div>

        <div id="start-message" class="fa-bounce">Start Here</div>
        <input type="text" class="input-field">

        <div class="content-box">

            <div class="text-of-typing" id="text-container">
                <p></p>

            </div>
            <div class="content">
                <ul id="ul1" class="result">
                    <li class="time" id="t1">
                        <p id="t2" title="Time">Time</p>
                        <span id="time">1:00</span>
                    </li>
                    <li class="errors" style="display:none;">
                        <p>Errors</p>
                        <span>0</span>
                    </li>
                    <li class="wpm" style="display:none;">
                        <p>WPM</p>
                        <span>0</span>
                    </li>
                    <li class="cpm" style="display:none;">
                        <p>CPM</p>
                        <span>0</span>
                    </li>
                </ul>

            </div>
        </div>

        <button id="try-again-btn" title="Try Again">Try Again</button>
    </div>
    <div class="loader" style="display: none;">
        <div id="page">
            <div id="container">
                <div id="ring"></div>
                <div id="ring"></div>
                <div id="ring"></div>
                <div id="ring"></div>
                <div id="h3"><B><I>WAIT FOR <BR>YOUR ACHIEVEMENT..</div>
            </div>
        </div>
    </div>
    <div class="achievement-box" style="display: none;">
        <span class="close-btn" id="close-achievement" title="close"></span>
        <p id="Ach1"><i class="fa-solid" style="color: #edfd77;"></i>
            Achievement Unlocked!</p>
        <div class="circle-container">
            <div class="circle accuracy-circle">
                <span class="circle-label" title="Accuracy Erros">Accuracy</span>
                <span class="circle-value" id="achievement-accuracy">100%</span>
            </div>
            <div class="symbol">X</div>
            <div class="circle cpm-circle">
                <span class="circle-label" title="Count Per Minute">CPM</span>
                <span class="circle-value" id="achievement-cpm">0</span>
            </div>
            <div class="symbol">=</div>
            <div class="circle wpm-circle">
                <span class="circle-label" Title="Word Per Minute">WPM</span>
                <span class="circle-value" id="achievement-wpm">0</span>
            </div>

        </div>
        <p id="achievement-remarks"></p>
        <button id="try-again-achievement-btn" title="Try Again">Try Again</button>
        <button id="home-btn" title="Home">Home</button>
    </div>

    <div class="achievement-chart-box" style="display: none;" title="Your Achievement Chart">

        <canvas id="achievement-chart"></canvas>

    </div>

    <div class="flip-card" id="card" style="margin-left: 9rem;">
        <div class="text3" style="font-weight:italic" >Time for typing games!

        <img src="./image/svg/game1.svg"
        style="height:3.2rem; width:3.2rem; position:absolute; top:-.1rem; margin-left:-25.6rem" alt="">

        </div>
        <div class="flip-card-inner" id="card">
        <a href="typinggame.php">
            <div class="flip-card-front">
            <img src="./image/car.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">CAR RACING</p>
                    <p style="font-size:1rem; color: #2a91d1;">Race Around the Typing Track.</p>
            </div>
            </a>
        </div>
    </div>
    <div class="flip-card" id="card2" style="margin-left: -7rem;">
        <div class="flip-card-inner">
        <a href="typinggame.php">
                <div class="flip-card-front">
                    <img src="./image/balloon.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">BALLOON KEY</p>
                    <p style="font-size:1rem; color: #2a91d1;">Balloon Key Float Up with Fast Fingers</p>
                </div>
                </a>

        </div>
    </div>

    <div class="flip-card" id="card3" style="margin-left: -23rem">
        <div class="flip-card-inner">
        <a href="typinggame.php">
                <div class="flip-card-front">
                    <img src="./image/BALLS.jpg" id="img" style="height:8.5rem;" alt="">
                    <p class="title">KEY BALLS</p>
                    <p style="font-size:1rem; color: #2a91d1; ">Unleash Speed, Control the Balls.</p>
                </div>
                </a>
        </div>
        </div>

        <div class="paragraphsection" id="para2">
            <img src="./image/svg/tip.svg" alt=""
                style="height:2.9rem; width:2.9rem; position:absolute; top:-6.5rem; margin-left:9.9rem">
            <H4 style="margin-top:-7rem; margin-left:13rem;  position: absolute;color: #2a91d1;font-weight: bold;font-size: 1.7rem;z-index: 1; border: 1rem solid none; border-style: none;
        width: 35rem;  font-family: 'Arial Black', Gadget, sans-serif; 
     text-transform: capitalize
     ; text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2); font-style:normal;">Typing Tips For Learner... </H4>
            <img src="./image/sad.png" alt="" class="sad-img"
                style="height: 18rem; width: 18rem; margin-left: 28rem; margin-top:2rem; position:absolute ">
            <p class="paragraphtext">
            <span class="headingtext" style="font-size:1.3rem; margin-bottom: .1rem; display:block; font-weight: bold;">
            Why can't typists speed up Easily?</span> Many people struggle to improve their typing speed and typing test results because they don't practice
             regularly or focus on accuracy. They might not learn the right finger positions or use typing exercises 
             that can help. Without these important steps, it's hard to get better at typing quickly and smoothly. 
             But with consistent practice and the right techniques, anyone can improve their typing speed and 
             efficiency. Remember to take breaks to avoid fatigue, use typing games to make practice fun, and 
             gradually challenge yourself with more difficult texts.</p>
            <img src="./image/happy.png" alt="" class="happy-img"
                style="height: 18rem; width: 18rem; margin-top: 35rem; margin-left:1rem; position:absolute ">
            <p class="paragraphtext1">
            <span class="headingtext" style="font-size:1.3rem; margin-top:-1rem; display:block; font-weight: bold;">
            What makes some Typists Successful?</span>That makes typists successful? Successful typists practice
                 regularly, focusing on typing both fast and accurately. They learn how to place their fingers 
                 correctly and use typing exercises, typing speed tests, and typing tests to get better. 
                 They take breaks to stay fresh, play typing games for fun, and keep challenging themselves 
                 with harder texts and typing speed tests. By incorporating various typing tests into their 
                 routine and being dedicated and patient, they steadily improve their typing speed and accuracy,
                reaching their goals step by step.
            </p>
            <button class="btt" onclick="window.location.href='blog.php'">More</button>
        </div>


        <script>

document.addEventListener("DOMContentLoaded", function() {
    const progressBar = document.getElementById('top-progress-bar');
    
    // Show progress bar on page load
    progressBar.style.opacity = '1';

    // Animate progress bar to 100% width over 2 seconds
    progressBar.style.width = '100%';
    
    // Hide progress bar after 2 seconds
    setTimeout(function() {
        progressBar.style.opacity = '0';
    }, 2000);
});


</script>

        <script>
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
        </script>
        <script>


const paragraphs = [
                "[proliferation of skyscrapers](architectural landscape: skyscrapers) in Saudi Arabia, the skyline of major cities such as Riyadh, Jeddah, and Dammam is undergoing remarkable transformations. From [iconic landmarks](major buildings: landmarks) like the Kingdom Centre in Riyadh to [commercial complexes](major buildings: commercial hubs) such as the Al Faisaliyah Center, the architectural landscape showcases a blend of modernity and tradition. Through [innovative designs](architectural features: design elements) and [cutting-edge technology](architectural features: technological advancements), these buildings not only redefine urban spaces but also symbolize the nation's aspirations for progress and prosperity. Amidst [urbanization challenges](current issues: urban development), including infrastructure demands and environmental concerns, the construction of [mega-projects](major developments: mega-projects) like the King Abdullah Financial District and the Jeddah Tower reflects Saudi Arabia's commitment to sustainable growth and urban excellence. As the country continues to [embrace architectural innovation](future trends: architectural trends) and [urban planning](future trends: urban development), the prominence of big buildings underscores Saudi Arabia's emergence as a dynamic hub of modern architecture and urban design, shaping the skylines of cities and inspiring future generations. With [the proliferation of skyscrapers](architectural landscape: skyscrapers) in Saudi Arabia, the skyline of major cities such as Riyadh, Jeddah, and Dammam is undergoing remarkable transformations. From [iconic landmarks](major buildings: landmarks) like the Kingdom Centre in Riyadh to [commercial complexes](major buildings: commercial hubs) such as the Al Faisaliyah Center, the architectural landscape showcases a blend of modernity and tradition. Through [innovative designs](architectural features: design elements) and [cutting-edge technology](architectural features: technological advancementsthese buildings not only redefine urban spaces but also symbolize the nation's aspirations for progress and prosperity. (digital divide bridged: progressively), [socioeconomic disparities](access to education expanded: equitably), and [cultural barriers](attitudes toward education shifted: gradually), they [remained resolute](resolve: unwavering) in their commitment to [transforming lives](impact: generational) and [building a brighter future](legacy: educated nation) for Nigeria. And as the [inaugural digital education platform](anticipated launch: 12/31/2025) drew near, they [stood ready](anticipation: palpable) to [break down barriers](vision: education for all) and [open doors](impact: transformative) [to limitless possibilities](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of",
                "[sacredness of Zam Zam water](religious significance: Zam Zam), its importance transcends mere sustenance to Muslims worldwide. Originating from the ancient well located within the confines of the Masjid al-Haram in Mecca, Saudi Arabia, Zam Zam water holds deep spiritual significance and historical relevance. [Believed to have originated](historical background: origin) miraculously by the will of Allah, its association with the story of Hagar and Ishmael imbues it with profound symbolism in Islamic tradition. Beyond its spiritual significance, Zam Zam water is revered for its [purported healing properties](cultural beliefs: healing properties) and is often sought by pilgrims and believers for its perceived benefits. Its unique mineral composition and purity, untouched by modern contamination, add to its mystique and allure. Despite scientific analyses indicating its composition similar to other groundwater sources in the region, the faith-based reverence for Zam Zam water continues unabated. [Regulated by the Saudi government](management and distribution: regulation), measures are in place to ensure its safe distribution and prevent exploitation. With [the sacredness of Zam Zam water](religious significance: Zam Zam), its importance transcends mere sustenance to Muslims worldwide. Originating from the ancient well located within the confines of the Masjid al-Haram in Mecca, Saudi Arabia, Zam Zam water holds deep spiritual significance and historical relevance. [Believed to have originated](historical background: origin) miraculously by the will of Allah, its association with the story of Hagar and Ishmael imbues it with profound symbolism in Islamic tradition. Beyond its spiritual significance, Zam Zam water is revered for its [purported healing properties](cultural beliefs: healing properties) and is often sought by pilgrims and believers for its perceived benefits. Its unique mineral composition and purity, untouched by modern contamination, add to its mystique and allure. Despite scientific analyses indicating its composition similar to other groundwater sources in the region, the faith-based reverence for Zam Zam water continues unabated. [Regulated by the Saudi government](management and distribution: regulation), measures are in place to ensure its safe distribution and prevent exploitation With [the sacredness of Zam Zam water](religious significance: Zam Zam), its importance transcends mere sustenance to Muslims worldwide. Originating from the ancient well located within the confines of the Masjid al-Haram in Mecca, Saudi Arabia, Zam Zam water holds deep spiritual significance and historical relevance. [Believed to have originated](historical background: origin) miraculously by the will of Allah, its association with the story of Hagar and Ishmael imbues it with profound symbolism in Islamic tradition. Beyond its ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of",
                "[history of the world](major epochs: historical timeline) spans millennia, encompassing a rich tapestry of civilizations, events, and transformations that have shaped human societies. From the emergence of ancient civilizations such as Mesopotamia, Egypt, and the Indus Valley, to the rise and fall of mighty empires like Rome, Byzantium, and the Mongol Empire, each epoch has left an indelible mark on the course of human history. The [ancient world](major epochs: ancient civilizations) saw the birth of writing, monumental architecture, and complex societies, laying the foundation for subsequent developments in art, science, and governance. The achievements of civilizations such as Greece and Rome continue to influence modern-day culture, politics, and philosophy. The [medieval period](major epochs: medieval era) witnessed the spread of Christianity and Islam, the flourishing of trade along the Silk Road, and the emergence of powerful feudal kingdoms and empires. The Crusades, the rise of the Byzantine Empire, and the spread of the Islamic Caliphates shaped the geopolitical landscape of Europe, Asia, and Africa. The [Renaissance](major epochs: Renaissance) and [Age of Exploration](major epochs: Age of Exploration) marked a period of profound intellectual and cultural revival in Europe, leading to advancements in art, science, and navigation. Explorers such as Columbus, Vasco da Gama, and Magellan opened up new trade routes and expanded the horizons of human knowledge. The [Modern era](major epochs: Modern era) witnessed the Age of Enlightenment, the Industrial Revolution, and the spread of colonialism and imperialism. Revolutionary movements, such as the French Revolution and the American Revolution, challenged traditional power structures and paved the way for the rise of democratic ideals. The [20th century](major epochs: 20th century) brought about unprecedented technological advancements, global conflicts, and social upheavals. World Wars I and II reshaped the geopolitical landscape, while the Cold War divided the world into competing ideological blocs. The struggle for decolonization, the civil rights movement, and the advent of globalization transformed societies and challenged traditional notions of power and identity. Today, as we stand at the dawn of the [21st century](major epochs: 21st century), we continue to grapple with complex challenges such as climate change, globalization, and the rise of digital technologies. The history of the world serves as a testament to the resilience, ingenuity, and adaptability of the human spirit, as we navigate the complexities of an ever-changing world. notions of power and identity. Today, as we stand at the dawn of the [21st century](major epochs: 21st century), we continue to grapple with complex challenges such as climate change, globalization, and the rise of digital technologies. ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of",
                "The [English language](linguistic evolution: English language) has undergone a remarkable evolution, shaped by a myriad of influences over centuries. Its origins can be traced back to the [5th century](linguistic evolution: early origins), with the arrival of Germanic tribes in Britain. [Old English](linguistic evolution: Old English), characterized by its complex inflectional system and Germanic vocabulary, gradually evolved into [Middle English](linguistic evolution: Middle English) following the Norman Conquest in [1066](linguistic evolution: Norman Conquest). This period saw the infusion of French vocabulary into the English language, resulting in a linguistic fusion that laid the groundwork for Modern English. The [Renaissance](linguistic evolution: Renaissance) and [Age of Enlightenment](linguistic evolution: Age of Enlightenment) ushered in a period of linguistic standardization and expansion, with the publication of influential works such as the King James Bible and the works of Shakespeare. The [Great Vowel Shift](linguistic evolution: Great Vowel Shift) during the [15th and 16th centuries](linguistic evolution: 15th and 16th centuries) marked a significant phonological change in the English language, resulting in the pronunciation differences we observe today. The [British Empire](linguistic evolution: British Empire) played a pivotal role in the global spread of the English language, with colonization leading to its adoption as a lingua franca in various parts of the world. [American English](linguistic evolution: American English) emerged as a distinct variety with its own unique vocabulary, spelling conventions, and pronunciation patterns, influenced by immigration, indigenous languages, and cultural factors. The [21st century](linguistic evolution: 21st century) has seen the continued expansion and evolution of the English language, driven by globalization, technology, and pop culture. The internet and social media have facilitated new forms of communication and linguistic innovation, giving rise to phenomena such as emojis, hashtags, and internet slang. Despite its global dominance, English continues to [evolve and adapt](linguistic evolution: adaptation) to changing social and cultural contexts, incorporating words and expressions from diverse languages and subcultures. The English language's [versatility and flexibility](linguistic evolution: versatility) make it a dynamic and resilient means of communication, capable of expressing a vast range of ideas and experiences across borders and cultures. The [English language](linguistic evolution: English language) has undergone a remarkable evolution, shaped by a myriad of influences over centuries. Its origins can be traced back to the [5th century](linguistic evolution: early origins), with the arrival of Germanic tribes in Britain. [Old English](linguistic evolution: Old English), characterized by its complex inflectional system and Germanic vocabulary, gradually evolved into [Middle English](linguistic evolution: Middle English) followinga",
                "Noam Chomsky, a [renowned linguist](major accomplishments: linguistics), philosopher, and political activist, has left an indelible mark on [numerous fields](major accomplishments: multidisciplinary contributions) over the course of his prolific career. Born on [December 7, 1928](biographical details: birthdate), in Philadelphia, Pennsylvania, Chomsky's groundbreaking work in linguistics revolutionized our understanding of language acquisition and cognition. Chomsky's [theory of generative grammar](linguistic contributions: generative grammar), first articulated in his seminal work Syntactic Structures published in [1957](linguistic contributions: publication date), challenged prevailing behaviorist theories and proposed that language is an innate human capacity governed by universal grammatical principles. This theory, known as [Universal Grammar](linguistic contributions: Universal Grammar), posits that all human languages share a common underlying structure, regardless of their surface differences. In addition to his contributions to linguistics, Chomsky is also renowned for his [political activism](political engagement: activism) and [critique of state power](political engagement: critique). His writings on [media manipulation](political engagement: media critique), [corporate influence](political engagement: corporate power), and [U.S. foreign policy](political engagement: foreign policy) have had a profound impact on public discourse and activism worldwide. Chomsky's [academic career](career trajectory: academia) spans decades, during which he has held prestigious positions at institutions such as the Massachusetts Institute of Technology (MIT), where he has been a professor since [1955](career trajectory: tenure at MIT). He has authored over [100 books](major accomplishments: publications), covering a wide range of topics including linguistics, politics, and philosophy. Throughout his life, Chomsky has been a vocal advocate for [social justice](political engagement: social justice) and [human rights](political engagement: human rights), lending his voice to various causes including anti-war efforts, environmentalism, and indigenous rights. As one of the most cited scholars in modern history, Chomsky's intellectual legacy continues to inspire generations of scholars, activists, and thinkers around the world. His relentless pursuit of truth, commitment to social justice, and unwavering dedication to critical inquiry make him a towering figure in both academia and activism. Noam Chomsky, a [renowned linguist](major accomplishments: linguistics), philosopher, and political activist, has left an indelible mark on [numerous fields](major accomplishments: multidisciplinary contributions) over the course of his prolific career. Born on [December 7, 1928](biographical details: birthdate), ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of",
                "Field of medicine encompasses a vast array of disciplines and specialties, [spanning centuries of innovation](historical evolution: historical timeline). From ancient healing practices to modern medical breakthroughs, the journey of medicine reflects humanity's relentless quest for understanding, healing, and prolonging life. [Historical records](historical evolution: ancient practices) reveal early medical practices dating back to civilizations such as ancient Egypt, Mesopotamia, and China. These cultures developed rudimentary methods of diagnosis, treatment, and surgery, laying the foundation for future medical advancements. The [Renaissance](historical evolution: Renaissance) marked a period of significant progress in medicine, with pioneering figures such as Andreas Vesalius and William Harvey challenging prevailing beliefs and advancing anatomical knowledge. The advent of the scientific method and the rise of empirical observation revolutionized medical thinking, leading to breakthroughs in physiology, pathology, and pharmacology. The [19th and 20th centuries](historical evolution: 19th and 20th centuries) witnessed unprecedented strides in medical science, fueled by discoveries such as the germ theory of disease, the development of vaccines and antibiotics, and the advent of modern surgery and anesthesia. Figures like Louis Pasteur, Robert Koch, and Florence Nightingale became synonymous with medical progress and public health initiatives. The [contemporary era](historical evolution: contemporary era) is characterized by rapid advancements in medical technology, genetics, and personalized medicine. Breakthroughs such as gene editing, regenerative medicine, and precision oncology hold promise for revolutionizing diagnosis and treatment approaches. [Medical specialties](disciplinary branches: medical specialties) have proliferated, catering to diverse healthcare needs and conditions. From cardiology and neurology to psychiatry and oncology, each specialty focuses on specific organs, systems, or diseases, employing specialized techniques and interventions to address complex medical challenges. The [COVID-19 pandemic](contemporary developments: COVID-19 pandemic) has underscored the importance of medical research, public health infrastructure, and global cooperation in combating infectious diseases. The development and distribution of vaccines in record time demonstrate the power of collaboration and scientific innovation in addressing global health crises. [Medical ethics](disciplinary branches: medical ethics) and [bioethics](disciplinary branches: bioethics) have emerged as critical areas of study, guiding ethical decision-making in patient care, research, and healthcare policy. Issues such as informed consent, end-of-life care, and genetic privacy pose complex ethical dilemmas requiring careful consideration and debate. In conclusion, the field of medicine continues to evolve, driven by scientific discovery, technological innovation, and the commitment of healthcare professionals worldwide. As we",
                "[development of China](historical evolution: Chinese development) represents one of the most remarkable economic and social transformations in human history. With a [civilization dating back millennia](historical evolution: ancient civilization), China has played a central role in global trade, culture, and innovation throughout the ages. [Historical records](historical evolution: ancient history) attest to China's early advancements in agriculture, technology, and governance, including the invention of papermaking, the compass, and the world's first bureaucratic system. These innovations laid the groundwork for China's subsequent rise as a global powerhouse. The [imperial era](historical evolution: imperial era) saw the consolidation of centralized governance under dynastic rule, as well as the construction of iconic landmarks such as the Great Wall and the Grand Canal. China's vast landmass, fertile river valleys, and strategic location along the Silk Road facilitated trade and cultural exchange with neighboring regions and beyond. The [19th century](historical evolution: 19th century) brought profound challenges to China, including foreign invasions, internal unrest, and economic decline. The Opium Wars, the Taiping Rebellion, and the decline of the Qing Dynasty marked a period of turmoil and upheaval, culminating in the establishment of the Republic of China in [1912](historical evolution: establishment of the Republic of China). The [20th century](historical evolution: 20th century) witnessed dramatic shifts in China's political landscape, from the founding of the People's Republic of China in [1949](historical evolution: founding of the People's Republic of China) to the tumultuous years of the Cultural Revolution and the subsequent economic reforms initiated by Deng Xiaoping in [1978](historical evolution: economic reforms). These reforms, which embraced elements of market capitalism while maintaining state control, unleashed unprecedented economic growth and development, propelling China to become the world's second-largest economy. In the [21st century](historical evolution: 21st century), China has emerged as a global leader in technology, manufacturing, and infrastructure development. The Belt and Road Initiative, launched in [2013](historical evolution: Belt and Road Initiative), aims to enhance connectivity and promote economic cooperation across Asia, Africa, and Europe, shaping the geopolitical landscape of the 21st century. However, China's rapid development has also been accompanied by challenges, including environmental degradation, income inequality, and concerns over human rights and political freedoms. As China continues to navigate the complexities of modernization and globalization, the pursuit of sustainable development and social harmony remains essential in shaping the country's future trajectory and its role on the world stage. ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of",
                "The [economy of Europe](economic landscape: Europe) is a complex and dynamic system, shaped by centuries of history, culture, and geopolitical forces. From the [Middle Ages](historical context: Middle Ages) to the [present day](historical context: present day), Europe has been a center of trade, commerce, and innovation, driving global economic growth and prosperity. The [Renaissance](historical context: Renaissance) marked a period of economic revival and cultural flourishing, with the emergence of banking and mercantile economies in cities such as Florence and Venice. The [Industrial Revolution](historical context: Industrial Revolution) transformed Europe's economy in the [18th and 19th centuries](historical context: 18th and 19th centuries), leading to mechanization, urbanization, and the rise of capitalist economies. The [20th century](historical context: 20th century) saw Europe devastated by two world wars, but also witnessed the continent's post-war reconstruction and economic integration efforts. The establishment of the [European Economic Community](economic integration: European Economic Community) in [1957](economic integration: establishment date) laid the groundwork for the European Union (EU), a political and economic union that has grown to encompass [27 member states](economic integration: number of member states) and [over 500 million people](economic integration: population). The [European Union](economic integration: European Union) has facilitated [economic cooperation](economic integration: economic cooperation) and [integration](economic integration: integration) among its member states through initiatives such as the single market, the euro currency, and the Schengen Area. These efforts have led to increased trade, investment, and mobility within Europe, contributing to overall economic growth and stability. The [global financial crisis](economic challenges: global financial crisis) of [2007-2008](economic challenges: crisis period) had a significant impact on Europe's economy, leading to recessions, austerity measures, and political instability in some countries. The [COVID-19 pandemic](economic challenges: COVID-19 pandemic) further exacerbated economic challenges, causing disruptions to supply chains, trade, and tourism across the continent. Despite these challenges, Europe remains a major player in the global economy, with [strong manufacturing](economic strengths: manufacturing) and [service sectors](economic strengths: service sectors), a highly educated workforce, and a rich cultural heritage that attracts millions of tourists each year. The European Union continues to work towards [sustainable economic growth](economic goals: sustainable growth), [innovation](economic goals: innovation), and [social cohesion](economic goals: social cohesion) through initiatives such as the European Green Deal and the Digital Single Market. ](legacy: empowered youth) for the youth of ](legacy: empowered youth) for the youth of",
                "[Organisation of Islamic Cooperation (OIC)](organizational overview: OIC) is an international organization founded on [25 September 1969](organizational overview: founding date) consisting of [57 member states](organizational overview: membership). It serves as the collective voice of the Muslim world, promoting solidarity, cooperation, and mutual support among its members. The OIC aims to address common challenges facing Muslim-majority countries, including [economic development](organizational objectives: economic development), [social progress](organizational objectives: social progress), and [political stability](organizational objectives: political stability). Through various mechanisms such as summits, ministerial meetings, and specialized agencies, the OIC seeks to foster collaboration and dialogue among its members. One of the key functions of the OIC is to [promote solidarity](organizational functions: solidarity) among Muslim countries and advocate for their collective interests on the global stage. This includes addressing issues such as Islamophobia, discrimination against Muslims, and conflicts affecting Muslim communities worldwide. The OIC also plays a role in [humanitarian assistance](organizational functions: humanitarian assistance) and [disaster relief efforts](organizational functions: disaster relief), providing support to member states affected by natural disasters, conflicts, and humanitarian crises. Additionally, the organization works to enhance [cultural exchange](organizational functions: cultural exchange) and [education](organizational functions: education) among member states, promoting understanding and cooperation across diverse cultural and linguistic backgrounds. Over the years, the OIC has expanded its focus to address emerging challenges such as [terrorism](organizational priorities: terrorism), [extremism](organizational priorities: extremism), and [radicalization](organizational priorities: radicalization). It has established mechanisms for counterterrorism cooperation and capacity-building, aiming to prevent the spread of violent extremism and promote peace and stability in Muslim-majority regions. Despite its efforts, the OIC faces various [challenges and limitations](organizational challenges: limitations) in achieving its objectives, including political divisions among member states, resource constraints, and the need for institutional reform. However, the organization continues to adapt and evolve, seeking to enhance its effectiveness and relevance in an ever-changing global landscape. As the largest intergovernmental organization representing the interests of the Muslim world, the OIC remains committed to promoting unity, cooperation, and solidarity among its members. Through dialogue, collaboration, and collective action, the organization strives to address the diverse needs and aspirations of Muslim communities worldwide, contributing to peace, stability, and prosperity in the Islamic world and beyond.",
                "Beauty of Paris transcends mere aesthetics, encompassing a rich tapestry of history, culture, and artistry that has captivated visitors for centuries. From its [medieval origins](historical context: medieval origins) to the [present day](historical context: present day), Paris has been a beacon of creativity, elegance, and romance. The [architecture](architectural highlights: architecture) of Paris is a testament to its storied past and cosmopolitan character. Iconic landmarks such as the Eiffel Tower, Notre-Dame Cathedral, and the Louvre Museum showcase a blend of Gothic, Renaissance, and Belle Époque styles, reflecting the city's evolution over time. The [city's parks and gardens](natural beauty: parks and gardens) offer tranquil oases amidst the hustle and bustle of urban life. From the expansive lawns of the Jardin des Tuileries to the picturesque pathways of the Luxembourg Gardens, Parisians and visitors alike seek refuge and relaxation in these green spaces. [Art](cultural richness: art) is woven into the fabric of Parisian life, with world-class museums, galleries, and street art adorning every corner. The Louvre, home to masterpieces such as the Mona Lisa and the Venus de Milo, attracts millions of visitors annually, while the Musée d'Orsay showcases an impressive collection of Impressionist and Post-Impressionist works. Paris's [culinary scene](cultural richness: culinary scene) is renowned worldwide, offering a feast for the senses with its exquisite pastries, gourmet cuisine, and bustling street markets. From Michelin-starred restaurants to cozy bistros and bustling brasseries, the city's dining options cater to every palate and budget. The [Seine River](natural beauty: Seine River) winds its way through the heart of Paris, providing a picturesque backdrop for leisurely strolls, romantic boat cruises, and vibrant riverfront promenades. The bridges that span the Seine, such as the Pont Neuf and the Pont Alexandre III, are architectural marvels in their own right, offering panoramic views of the cityscape. Paris's [fashion industry](cultural richness: fashion) is synonymous with elegance and style, with renowned designers such as Chanel, Dior, and Louis Vuitton calling the city home. From haute couture boutiques on the Champs-Élysées to trendy vintage shops in the Marais, Paris offers a shopping experience like no other. Throughout its history, Paris has been a [cultural hub](cultural richness: cultural hub) and a source of inspiration for artists, writers, and thinkers from around the world. The literary cafés of the Left Bank, the bohemian neighborhoods of Montmartre, and the avant-garde galleries of the Marais continue to foster creativity and innovation in the arts. In conclusion, the beauty of Paris lies not only in its iconic landmarks and picturesque landscapes but also in its vibrant culture, rich history, and unparalleled joie de vivre. Whether wandering the cobblestone streets of the Latin Quarter or savoring a croissant in a charming café, visitors to Paris are sure to be enchanted by the city's timeless allure and enduring elegance.",
                "The [dinosaurs](prehistoric creatures: dinosaurs) roamed the Earth millions of years ago, dominating the planet for over [160 million years](prehistoric creatures: duration). These magnificent creatures varied greatly in size, shape, and behavior, ranging from the towering sauropods to the ferocious theropods. Their fossils, discovered in various parts of the world, provide invaluable insights into prehistoric life and evolution. [The Mesozoic Era](prehistoric context: Mesozoic Era), commonly referred to as the Age of Dinosaurs, spanned from approximately [252 million years ago](prehistoric context: start of Mesozoic Era) to [66 million years ago](prehistoric context: end of Mesozoic Era). It was during this time that dinosaurs flourished, evolving into a diverse array of species adapted to various environments, from lush forests to arid deserts. One of the earliest known dinosaurs is [Eoraptor](early dinosaurs: Eoraptor), a small bipedal creature that lived during the Late Triassic period around [231 million years ago](early dinosaurs: Eoraptor). As dinosaurs continued to evolve, they diversified into three main groups: the [ornithischians](dinosaur classification: ornithischians), the [saurischians](dinosaur classification: saurischians), and the [theropods](dinosaur classification: theropods). The [Jurassic Period](prehistoric context: Jurassic Period), spanning from approximately [201 million years ago](prehistoric context: start of Jurassic Period) to [145 million years ago](prehistoric context: end of Jurassic Period), is often referred to as the Golden Age of Dinosaurs. It was during this time that iconic dinosaurs such as [Stegosaurus](dinosaurs of the Jurassic Period: Stegosaurus), [Brachiosaurus](dinosaurs of the Jurassic Period: Brachiosaurus), and [Allosaurus](dinosaurs of the Jurassic Period: Allosaurus) roamed the Earth. The [Cretaceous Period](prehistoric context: Cretaceous Period), which followed the Jurassic, lasted from approximately [145 million years ago](prehistoric context: start of Cretaceous Period) to [66 million years ago](prehistoric context: end of Cretaceous Period). It witnessed the emergence of new dinosaur species such as [Tyrannosaurus rex](dinosaurs of the Cretaceous Period: Tyrannosaurus rex), [Triceratops](dinosaurs of the Cretaceous Period: Triceratops), and [Ankylosaurus](dinosaurs of the Cretaceous Period: Ankylosaurus). The end of the Cretaceous Period is marked by one of the most significant events in Earth's history: the [mass extinction event](extinction event: mass extinction) that wiped out the dinosaurs, along with many other species. While the exact cause of the extinction remains a topic of debate, hypotheses include [volcanic activity](causes of extinction: volcanic activity), [climate change](causes of extinction: climate change), and [asteroid impact](causes of extinction: asteroid impact). Despite their extinction, dinosaurs continue to capture the imagination of people around the world. Their fossils, preserved in museums and research institutions, provide scientists with valuable clues about the Earth's ancient past and the origins of life. Through ongoing research and discoveries, the legacy of the dinosaurs lives on, inspiring awe and wonder in all who encounter their ancient remains. Dinosaurs were not only diverse in their physical characteristics but also in their behavior and ecological roles. Some dinosaurs were herbivores, feeding on plants and vegetation, while others were carnivores, preying on smaller animals. Additionally, there were omnivorous dinosaurs that consumed both plant and animal matter. The study of dinosaur behavior and social dynamics is an area of ongoing research and debate among paleontologists. Evidence such as trackways, nesting sites, and fossilized bone beds suggests that some dinosaurs exhibited complex social behaviors, including herding, nesting, and parental care. Furthermore, recent discoveries have shed light on the remarkable adaptations of dinosaurs to their environments. For example, the discovery of feathered dinosaurs such as Velociraptor and Archaeopteryx has challenged traditional perceptions of dinosaurs as scaly reptiles, suggesting a closer evolutionary link to modern birds. Dinosaurs also played a crucial role in shaping the ecosystems of their time.",
                "Climate change is one of the most pressing challenges facing humanity in the 21st century, with far-reaching implications for the environment, society, and the global economy. [The phenomenon](overview: phenomenon) refers to long-term shifts in temperature, precipitation patterns, and other climatic variables, primarily driven by human activities such as [greenhouse gas emissions](causes: greenhouse gas emissions), deforestation, and industrialization. [The scientific consensus](scientific consensus: consensus) on climate change is clear: the Earth's climate is warming at an unprecedented rate, with [evidence](scientific consensus: evidence) pointing to the role of human activities in driving this trend. The [Intergovernmental Panel on Climate Change (IPCC)](scientific consensus: IPCC), established by the United Nations, has repeatedly warned of the [dire consequences](scientific consensus: consequences) of unchecked climate change, including rising sea levels, more frequent and severe extreme weather events, and disruptions to ecosystems and biodiversity. [The history of climate change](historical context: history) dates back to the Industrial Revolution, which began in the [late 18th century](historical context: Industrial Revolution). The widespread burning of fossil fuels such as coal, oil, and natural gas has led to a significant increase in atmospheric concentrations of carbon dioxide (CO2) and other greenhouse gases, trapping heat in the Earth's atmosphere and causing global temperatures to rise. [The impacts of climate change](impacts: impacts) are already being felt around the world. Melting polar ice caps and glaciers are contributing to [rising sea levels](impacts: rising sea levels), threatening coastal communities and low-lying island nations with inundation and erosion. Changes in precipitation patterns are leading to [more frequent and intense droughts](impacts: droughts) in some regions and [increased flooding](impacts: flooding) in others, exacerbating water scarcity and food insecurity. [Extreme weather events](impacts: extreme weather events) such as hurricanes, heatwaves, and wildfires are becoming more severe and frequent, causing loss of life, property damage, and economic disruption. [Ecosystems](impacts: ecosystems) are under threat from changing climatic conditions, with species facing habitat loss, shifts in migration patterns, and increased risk of extinction. [The social and economic impacts](impacts: social and economic) of climate change are profound, disproportionately affecting vulnerable communities and exacerbating existing inequalities. [Climate refugees](impacts: climate refugees), forced to flee their homes due to environmental degradation and resource scarcity, are becoming increasingly common, placing strain on host communities and contributing to social unrest and conflict. [Efforts to mitigate climate change](mitigation efforts: mitigation) and adapt to its impacts are underway at local, national, and international levels. The [Paris Agreement](mitigation efforts: Paris Agreement), adopted in [2015](mitigation efforts: adoption date), represents a landmark accord in which nearly every country in the world committed to limiting global warming to well below [2 degrees Celsius](mitigation efforts: temperature target) above pre-industrial levels, with efforts to limit the increase to [1.5 degrees Celsius](mitigation efforts: temperature target) if possible. [Transitioning to renewable energy sources](mitigation efforts: renewable energy), increasing energy efficiency, and implementing [carbon pricing](mitigation efforts: carbon pricing) mechanisms are among the strategies being pursued to reduce greenhouse gas emissions. [Nature-based solutions](mitigation efforts: nature-based solutions) such as reforestation, ecosystem restoration, and sustainable land management are also being promoted to enhance carbon sequestration and resilience to climate impacts. [Adaptation measures](adaptation efforts: adaptation) such as improving infrastructure resilience, enhancing disaster preparedness, and implementing sustainable agricultural practices are essential for building climate resilience and protecting vulnerable communities. [Investments](adaptation efforts: investments) in climate-resilient infrastructure, early warning systems, and social safety nets can help mitigate the impacts of climate change and promote sustainable development. [Education](engagement: education), [awareness-raising](engagement: awareness-raising), and [public engagement](engagement: public engagement) are crucial for fostering a sense of urgency and collective action on climate change. Individuals, businesses, and governments all have a role to play in reducing emissions, conserving resources, and promoting sustainable practices in their daily lives and operations. In conclusion, climate change poses a grave threat to the planet and its inhabitants, requiring urgent and concerted action from all sectors of society. By working together to reduce emissions, build resilience, and transition to a sustainable and low-carbon future, we can mitigate the worst impacts of climate change and create a healthier, more equitable world for future generations.",
                "First World War, also known as the Great War, was a global conflict that engulfed much of Europe, as well as parts of the Middle East, Africa, Asia, and the Pacific. Fought between [1914](start of the war: 1914) and [1918](end of the war: 1918), the war pitted the Allied Powers, including Great Britain, France, Russia, and later the United States, against the Central Powers, primarily Germany, Austria-Hungary, and the Ottoman Empire [The origins of the First World War](causes: origins) can be traced back to a complex web of political, economic, and military tensions that had been building in Europe for decades. These tensions were exacerbated by factors such as imperial rivalries, militarism, nationalism, and the system of alliances that had developed among European powers. [The assassination of Archduke Franz Ferdinand](causes: assassination) of Austria-Hungary in [1914](causes: assassination date) served as the spark that ignited the powder keg of European tensions, leading to the outbreak of war. Austria-Hungary's subsequent declaration of war on Serbia triggered a chain reaction of alliances being invoked, drawing much of Europe into the conflict. [The Western Front](major theaters: Western Front), stretching from Belgium to Switzerland, became the primary battleground of the war, characterized by trench warfare and devastating battles such as the [Battle of the Somme](major battles: Battle of the Somme) and the [Battle of Verdun](major battles: Battle of Verdun). Millions of soldiers on both sides were killed, wounded, or suffered from the harsh conditions of trench warfare. [The Eastern Front](major theaters: Eastern Front), encompassing Eastern Europe and Russia, witnessed large-scale offensives and territorial changes as Russian, German, and Austro-Hungarian forces clashed. The [Russian Revolution of 1917](major events: Russian Revolution) and the subsequent [Bolshevik seizure of power](major events: Bolshevik Revolution) led to Russia's withdrawal from the war and the signing of the [Treaty of Brest-Litovsk](major events: Treaty of Brest-Litovsk) with Germany, freeing up German troops for deployment on the Western Front. [The war also saw the emergence](technological advancements: emergence) of new military technologies and tactics, including tanks, airplanes, chemical weapons, and machine guns, which transformed the nature of warfare and led to unprecedented levels of destruction and casualties. [The United States entered the war](major events: U.S. entry) in [1917](major events: U.S. entry date), tipping the balance of power in favor of the Allies. American troops played a crucial role in the final offensives of the war, helping to break the stalemate on the Western Front and hastening the collapse of the Central Powers. [The armistice agreement](end of the war: armistice) signed on [11 November 1918](end of the war: armistice date) brought an end to the fighting, although peace negotiations would continue for several months. The [Treaty of Versailles](peace treaties: Treaty of Versailles), signed in [1919](peace treaties: Treaty of Versailles date), imposed harsh penalties on Germany, including territorial losses, demilitarization, and reparations payments, setting the stage for future conflicts. [The First World War](legacy: legacy) had far-reaching consequences that shaped the course of the 20th century and beyond. The war resulted in the [collapse of empires](legacy: collapse of empires) such as the Ottoman, Austro-Hungarian, Russian, and German Empires, leading to the redrawing of national boundaries and the emergence of new states in Europe and the Middle East. [The war also had profound](legacy: profound) social, economic, and cultural impacts, including the [displacement of millions](legacy: displacement) of people, the [devastation of economies](legacy: devastation), and the [trauma](legacy: trauma) experienced by soldiers and civilians alike. The war's [legacy of bitterness](legacy: bitterness) and resentment would contribute to the [rise of totalitarian regimes](legacy: rise of totalitarian regimes) and the outbreak of the [Second World War](legacy: Second World War) just two decades later. In conclusion, the First World War was a watershed moment in human history, marking the end of an era of relative peace and stability and ushering in a century of upheaval, conflict, and profound social change. Its impact continues to be felt to this day, serving as a sobering reminder of the consequences of war and the importance of diplomacy, cooperation, and peacebuilding in preventing future conflicts.",
                "Human rights violations individuals, encompass a wide range of abuses, including [torture](types of violations: torture), [arbitrary detention](types of violations: arbitrary detention), [extrajudicial killings](types of violations: extrajudicial killings), [forced disappearances](types of violations: forced disappearances), [discrimination](types of violations: discrimination), [sexual violence](types of violations: sexual violence), [restrictions on freedom of expression](types of violations: freedom of expression), and [violations of the right to life](types of violations: right to life), among others. [The Universal Declaration of Human Rights](legal framework: Universal Declaration of Human Rights) (UDHR), adopted by the United Nations General Assembly on [10 December 1948](legal framework: adoption date), serves as a foundational document in the protection and promotion of human rights. It outlines a broad range of civil, political, economic, social, and cultural rights that are inherent to all human beings, regardless of race, nationality, religion, or other status. Despite the existence of international human rights standards and mechanisms, human rights violations persist in various parts of the world. [Authoritarian regimes](perpetrators: authoritarian regimes), [conflict situations](perpetrators: conflict situations), [terrorist organizations](perpetrators: terrorist organizations), [criminal networks](perpetrators: criminal networks), and [corrupt governments](perpetrators: corrupt governments) are among the perpetrators responsible for committing or condoning human rights abuses. [The International Criminal Court](response mechanisms: International Criminal Court) (ICC), established by the Rome Statute on [17 July 1998](response mechanisms: establishment date), serves as a permanent tribunal tasked with prosecuting individuals for the most serious crimes of international concern, including genocide, crimes against humanity, war crimes, and the crime of aggression. The ICC plays a crucial role in holding perpetrators of human rights violations accountable and providing justice for victims. [Non-governmental organizations](response mechanisms: NGOs) (NGOs), [civil society organizations](response mechanisms: civil society organizations) (CSOs), and [human rights defenders](response mechanisms: human rights defenders) also play a vital role in documenting human rights violations, advocating for accountability, and providing support to victims and survivors. Their work often involves monitoring, reporting, and raising awareness about human rights abuses, as well as providing legal assistance, medical care, and psychosocial support to affected individuals and communities. [The principle of universal jurisdiction](response mechanisms: universal jurisdiction) allows national courts to prosecute individuals accused of serious human rights violations, regardless of where the crimes were committed or the nationality of the perpetrators or victims. This principle serves as a deterrent to impunity and provides an avenue for justice when other mechanisms fail to deliver accountability. [International human rights treaties](response mechanisms: international treaties) and [mechanisms](response mechanisms: mechanisms) such as [the United Nations Human Rights Council](response mechanisms: United Nations Human Rights Council) (UNHRC), [the Office of the High Commissioner for Human Rights](response mechanisms: Office of the High Commissioner for Human Rights) (OHCHR), [the Special Procedures of the Human Rights Council](response mechanisms: Special Procedures), and [the treaty bodies](response mechanisms: treaty bodies) play a critical role in monitoring state compliance with human rights obligations, conducting investigations, and issuing recommendations for improvement. Despite these efforts, challenges remain in addressing and preventing human rights violations. Political interests, [geopolitical tensions](challenges: geopolitical tensions), [lack of accountability](challenges: lack of accountability), [weak governance](challenges: weak governance), [corruption](challenges: corruption), [poverty](challenges: poverty), [inequality](challenges: inequality), [discrimination](challenges: discrimination), [armed conflicts](challenges: armed conflicts), [terrorism](challenges: terrorism), [climate change](challenges: climate change), and [public health emergencies](challenges: public health emergencies) are among the factors that contribute to the persistence of human rights violations worldwide. In conclusion, addressing human rights violations requires a multifaceted approach that involves political will, international cooperation, legal accountability, civil society engagement, and grassroots activism. By upholding universal human rights standards, holding perpetrators accountable, and empowering victims and survivors, we can work towards a world where the inherent dignity and worth of every individual are respected and protected.",
                "Healthcare, among others. [Infectious diseases](health challenges: infectious diseases) pose significant threats to global health, with outbreaks such as [Ebola](infectious diseases: Ebola), [Zika](infectious diseases: Zika), [HIV/AIDS](infectious diseases: HIV/AIDS), [malaria](infectious diseases: malaria), [tuberculosis](infectious diseases: tuberculosis), and [COVID-19](infectious diseases: COVID-19) causing widespread illness, death, and economic disruption. These diseases can spread rapidly across borders, leading to pandemics and public health emergencies that require coordinated international responses. [Non-communicable diseases](health challenges: non-communicable diseases) (NCDs), including cardiovascular diseases, cancer, diabetes, and chronic respiratory diseases, are responsible for the majority of deaths worldwide. Risk factors such as tobacco use, unhealthy diets, physical inactivity, and harmful use of alcohol contribute to the rise of NCDs, posing significant challenges to healthcare systems and economies globally. [Environmental health hazards](health challenges: environmental health hazards), such as air pollution, water contamination, climate change, and occupational hazards, have profound impacts on public health. Poor air quality, for example, contributes to respiratory diseases and premature death, while waterborne diseases and foodborne illnesses pose risks to populations lacking access to clean water and sanitation. [Health disparities](health challenges: health disparities) persist within and between countries, with marginalized populations often bearing the brunt of poor health outcomes. Factors such as socioeconomic status, race, ethnicity, gender, disability, and geographical location contribute to disparities in access to healthcare, health services, and health outcomes. [Access to healthcare](health challenges: access to healthcare) is a critical issue that affects millions of people worldwide. Many individuals lack access to essential health services, medicines, and vaccines, resulting in preventable deaths and suffering. Barriers such as cost, distance, infrastructure, workforce shortages, and systemic inequalities hinder efforts to achieve universal health coverage and ensure health for all. [Global health security](response mechanisms: global health security) is paramount in addressing emerging health threats and preventing pandemics. Initiatives such as the [International Health Regulations](response mechanisms: International Health Regulations) (IHR), adopted by the World Health Organization (WHO) in [2005](response mechanisms: adoption date), aim to strengthen countries' capacities to detect, assess, report, and respond to public health emergencies of international concern. [International cooperation](response mechanisms: international cooperation) and [multilateral initiatives](response mechanisms: multilateral initiatives) are essential for addressing global health challenges effectively. Organizations such as the WHO, the United Nations Children's Fund (UNICEF), the World Bank, and non-governmental organizations play key roles in coordinating responses, mobilizing resources, and providing technical assistance to countries in need. [Innovations](response mechanisms: innovations) in healthcare delivery, technology, and research hold promise for addressing global health issues. Advances in telemedicine, digital health, genomics, and vaccine development have the potential to improve access to healthcare, enhance disease surveillance, and accelerate progress towards achieving health-related Sustainable Development Goals (SDGs). [Community engagement](response mechanisms: community engagement), [empowerment](response mechanisms: empowerment), and [health promotion](response mechanisms: health promotion) are essential components of effective global health interventions. Empowering communities to participate in decision-making, promoting health education and awareness, and addressing social determinants of health are critical for achieving sustainable improvements in health outcomes. In conclusion, global health issues require comprehensive, equitable, and sustainable approaches that address the complex interplay of biological, social, environmental, and economic factors. By investing in health systems strengthening, promoting health equity, and fostering international cooperation, we can build a healthier, more resilient world for present and future generations.",
                "New Development Bank (NDB), also known as the BRICS Development Bank, assumes a pivotal role, spearheading initiatives to foster economic growth, infrastructure development, and sustainable development among its member countries. With a primary [objective of promoting inclusive and sustainable development](organizational mission: development finance), the NDB leads a diverse portfolio of projects aimed at bolstering infrastructure, supporting green energy initiatives, and advancing social equity. From [investments in critical infrastructure projects](key initiatives: infrastructure development) to [support for renewable energy projects](key initiatives: sustainable energy), from [initiatives to address climate change](key initiatives: climate action) to [programs promoting social inclusion](key initiatives: social equity), the NDB's actions are comprehensive and impactful. Through [collaborative partnerships with member countries](collaborative efforts: member nation collaborations), [engagement with multilateral institutions](collaborative efforts: inter-organizational cooperation), and [dialogue with stakeholders](collaborative efforts: stakeholder engagement), the NDB endeavors to drive sustainable development and address global challenges. Despite obstacles such as [economic disparities](challenges faced: economic inequalities), [climate change](challenges faced: environmental concerns), and [social inequities](challenges faced: social disparities), the NDB showcases resilience, adaptability, and unwavering commitment to its mission. As member countries navigate [current global dynamics](current landscape: ongoing challenges) and seize [emerging opportunities](future outlook: potential advancements), the focus remains on [inclusive strategies](strategic focus: inclusivity approaches) and [evidence-based decision-making](strategic focus: data-driven policies), reaffirming the NDB's critical role in fostering sustainable development and prosperity among its member nations. Within the realm of global finance, the New Development Bank (NDB), often referred to as the BRICS Development Bank, occupies a central position, driving initiatives aimed at fostering economic growth, infrastructure enhancement, and sustainable development among its member states. With a primary [objective of advancing inclusive and sustainable development](organizational mission: development finance), the NDB leads a diverse array of projects focused on fortifying infrastructure, promoting renewable energy initiatives, and advancing social equity. From [investments in vital infrastructure projects](key initiatives: infrastructure development) to [support for green energy ventures](key initiatives: sustainable energy), from [initiatives addressing climate change](key initiatives: climate action) to [programs fostering social cohesion](key initiatives: social equity), the NDB's endeavors are extensive and impactful. Through [collaborative alliances with member nations](collaborative efforts: member nation partnerships), [engagement with international organizations](collaborative efforts: inter-organizational cooperation), and [consultations with stakeholders](collaborative efforts: stakeholder engagement), the NDB strives to propel sustainable development and tackle global challenges. Despite hurdles such as [economic disparities](challenges faced: economic inequalities), [climate change](challenges faced: environmental concerns), and [social disparities](challenges faced: social inequities), the NDB demonstrates resilience, adaptability, and steadfast dedication to its mission. As member countries navigate [current global dynamics](current landscape: ongoing challenges) and capitalize on [emerging opportunities](future outlook: potential advancements), the emphasis remains on [inclusive strategies](strategic focus: inclusivity approaches) and [evidence-based policies](strategic focus: data-driven approaches), underscoring the NDB's critical role in fostering sustainable development and",
                "In the domain of regional cooperation, the Association of Southeast Asian Nations (ASEAN) assumes a central role, driving initiatives to promote unity, economic progress, and collective action among member states. With a core [objective of enhancing regional integration and prosperity](organizational mission: regional cooperation), ASEAN leads diverse endeavors aimed at advancing economic development, enhancing connectivity, and fostering cultural exchange within Southeast Asia. From [initiatives to facilitate trade and investment](key initiatives: trade promotion) to [projects aimed at enhancing regional infrastructure](key initiatives: infrastructure development), from [collaborative efforts to address transnational challenges](key initiatives: cross-border cooperation) to [programs promoting people-to-people connectivity](key initiatives: cultural exchange), ASEAN's activities are wide-ranging and impactful. Through [collaborative partnerships among member countries](collaborative efforts: member nation alliances), [engagement with external partners](collaborative efforts: external cooperation), and [dialogue with stakeholders](collaborative efforts: stakeholder engagement), ASEAN aims to strengthen regional unity and promote sustainable development. Despite challenges such as [geopolitical complexities](challenges faced: geopolitical dynamics), [economic disparities](challenges faced: economic inequalities), and [environmental concerns](challenges faced: environmental issues), ASEAN demonstrates resilience, adaptability, and unwavering commitment to its mission. As member states navigate [current regional dynamics](current landscape: ongoing challenges) and embrace [emerging opportunities](future outlook: potential advancements), the focus remains on [inclusive approaches](strategic focus: inclusivity strategies) and [evidence-based policies](strategic focus: data-driven approaches), reaffirming ASEAN's crucial role in fostering regional cooperation and prosperity in Southeast Asia. In the arena of regional collaboration, the Association of Southeast Asian Nations (ASEAN) occupies a pivotal position, spearheading efforts to foster cohesion, economic advancement, and joint action among member nations. With a fundamental [commitment to enhancing regional unity and prosperity](organizational mission: regional cooperation), ASEAN leads a diverse array of initiatives aimed at promoting economic growth, bolstering connectivity, and nurturing cultural exchange within Southeast Asia. From [endeavors to facilitate trade and investment](key initiatives: trade facilitation) to [initiatives aimed at strengthening regional infrastructure](key initiatives: infrastructure enhancement), from [collaborative ventures to tackle transnational challenges](key initiatives: cross-border cooperation) to [programs fostering interpersonal connectivity](key initiatives: cultural exchange), ASEAN's efforts are comprehensive and impactful. Through [collaborative partnerships among member states](collaborative efforts: member nation collaborations), [engagement with external stakeholders](collaborative efforts: external engagements), and [consultations with diverse constituents](collaborative efforts: stakeholder consultations), ASEAN endeavors to fortify regional solidarity and advance sustainable development. Despite hurdles such as [geopolitical complexities](challenges faced: geopolitical dynamics), [economic disparities](challenges faced: economic discrepancies), and [environmental considerations](challenges faced: ecological factors), ASEAN exhibits resilience, adaptability, and unwavering dedication to its objectives. As member countries navigate [current regional dynamics](current landscape: ongoing developments) and seize [emerging opportunities](future outlook: potential advancements), the emphasis remains on [inclusive strategies](strategic focus: inclusivity approaches) and [evidence-based decision-making](strategic focus: data-driven policies), reaffirming ASEAN's indispensable role in fostering regional cooperation and prosperity throughout Southeast Asia. In the realm of",
                "Asian Development Bank (ADB) assumes a critical role, spearheading initiatives to promote growth, infrastructure development, and poverty reduction across Asia and the Pacific. With a core [focus on advancing sustainable and inclusive economic progress](organizational mission: regional development), the ADB leads a diverse array of projects aimed at enhancing infrastructure, fostering economic resilience, and promoting social equity. From [investment in critical infrastructure projects](key initiatives: infrastructure development) to [support for sustainable energy initiatives](key initiatives: renewable energy), from [financial inclusion programs](key initiatives: financial empowerment) to [disaster resilience efforts](key initiatives: disaster risk reduction), the ADB's activities are comprehensive and impactful. Through [collaborative partnerships with member countries](collaborative efforts: country collaborations), [engagement with multilateral organizations](collaborative efforts: inter-organizational cooperation), and [consultations with stakeholders](collaborative efforts: stakeholder engagement), the ADB endeavors to drive sustainable development and address regional challenges. Despite obstacles such as [economic disparities](challenges faced: economic inequalities), [environmental degradation](challenges faced: environmental concerns), and [social inequality](challenges faced: social disparities), the ADB demonstrates resilience, adaptability, and unwavering commitment to its mission. As countries navigate [current development dynamics](current landscape: ongoing challenges) and embrace [emerging opportunities](future outlook: potential advancements), the emphasis remains on [inclusive strategies](strategic focus: inclusivity approaches) and [evidence-based interventions](strategic focus: data-driven policies), underscoring the ADB's critical role in fostering sustainable development and prosperity across Asia and the Pacific region. In the sphere of regional development, the Asian Development Bank (ADB) holds a central position, driving initiatives to spur growth, infrastructure advancement, and poverty alleviation throughout Asia and the Pacific. With a primary [mission of fostering sustainable and inclusive economic advancement](organizational mission: regional development), the ADB spearheads a diverse portfolio of projects aimed at bolstering infrastructure, enhancing economic resilience, and promoting social equity. From [investment in critical infrastructure projects](key initiatives: infrastructure development) to [support for renewable energy initiatives](key initiatives: sustainable energy), from [initiatives promoting financial inclusion](key initiatives: financial empowerment) to [efforts to enhance disaster resilience](key initiatives: disaster risk reduction), the ADB's endeavors are comprehensive and impactful. Through [collaborative partnerships with member nations](collaborative efforts: country collaborations), [engagement with multilateral entities](collaborative efforts: inter-organizational cooperation), and [dialogue with stakeholders](collaborative efforts: stakeholder engagement), the ADB strives to drive sustainable development and address regional challenges. Despite hurdles such as [economic disparities](challenges faced: economic inequalities), [environmental degradation](challenges faced: environmental concerns), and [social inequities](challenges faced: social disparities), the ADB exhibits resilience, adaptability, and steadfast dedication to its mission. As countries navigate [current developmental dynamics](current landscape: ongoing challenges) and seize [emerging opportunities](future outlook: potential advancements), the focus remains on [inclusive strategies](strategic focus: inclusivity approaches) and [data-driven interventions](strategic focus: evidence-based policies), highlighting the ADB's crucial role in fostering sustainable development and prosperity across Asia and the Pacific. In the realm of regional development, the Asian Development Bank (ADB) plays a pivotal role, driving endeavors to foster growth, infrastructure enhancement, and poverty reduction across Asia and the Pacific.",

            ]
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
        let maxTime = 60;
        let timeLeft = maxTime;
        let isTyping = false; // Change to boolean value
        let characters;
        let currentWord = ""; // Track the current word being typed
        let currentWordIndex = 0; // Track the current word index
        const paragraphChunks = []
        let currentChunkIndex = 0;
        let chunk = "";


        function fetchRandomParagraph() {
            let randomIndex = Math.floor(Math.random() * paragraphs.length);
            let paragraph = paragraphs[randomIndex];
            paragraph = paragraph.substring(0, maxCharactersDisplayed);
            let chunkSize = paragraph.length / 12;
            for (let i = 0; i < paragraph.length; i += chunkSize) {
                paragraphChunks.push(paragraph.substring(i, i + chunkSize));
            }
            document.addEventListener('keydown', () => inputField.focus());
            typing_text.addEventListener('click', () => inputField.focus());
            document.getElementById('text-container').scrollTop = 0;
        }

        function displayRandomParagraph() {
            if (currentChunkIndex < paragraphChunks.length) {
                let chunk = paragraphChunks[currentChunkIndex];
                typing_text.innerHTML = "";
                chunk.split("").forEach((char) => {
                    let spanTag = `<span>${char}</span>`;
                    typing_text.innerHTML += spanTag;
                });
                currentChunkIndex++;
            } else {
                console.log("Paragraph completed");
            }
            characters = typing_text.querySelectorAll('span');
        }

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
            fetchRandomParagraph();
            displayRandomParagraph()
            inputField.focus(); // Focus the input field when the page loads

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
        const maxCharactersDisplayed = 6000; // Adjust this value as needed


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
            const lastIndexOfCharacters = characters.length - 1;
            const preloadThreshold = 100; // Adjust this threshold as needed
            const remainingCharacters = lastIndexOfCharacters - characterIndex;
            if (remainingCharacters <= preloadThreshold && currentChunkIndex < paragraphChunks.length - 1) {
                const nextChunk = paragraphChunks[currentChunkIndex + 1];
                const fragment = document.createDocumentFragment();
                nextChunk.split("").forEach((char) => {
                    let span = document.createElement('span');
                    span.textContent = char;
                    fragment.appendChild(span);
                });
                // Append the fragment to the typing_text container
                typing_text.appendChild(fragment);
                // Update the characters NodeList
                characters = typing_text.querySelectorAll('span');
                currentChunkIndex++;
            }
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
            const ft = document.getElementById('ft');
            const para2 = document.getElementById('para2')
            card.style.display = 'none';
            card2.style.display = 'none';
            card3.style.display = 'none';
            bg1.style.display = 'none';
            ft.style.display = 'none';
            para2.style.display = 'none';



            // Hide it after 3 seconds and show the achievement box
            setTimeout(() => {
                card.style.display = 'block';
                card2.style.display = 'block';
                card3.style.display = 'block';
                bg1.style.display = 'block';
                ft.style.display = 'block';
                para2.style.display = 'block';
            

                loadingLoader.style.display = 'none';
                document.body.classList.remove('waiting-for-achievement');
                showAchievementBox();
                // Add a class to move the card down below the achievement box
                card.classList.add('move-down');
                card2.classList.add('move-down');
                card3.classList.add('move-down');
                bg1.classList.add('move-down');
                ft.classList.add('move-down');
                para2.classList.add('move-down');

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
                    backgroundColor: ['rgba(196, 52, 33, 0.8)', 'rgba(78, 78, 194, 0.8)',
                        'rgba(212, 209, 32, 0.8)'
                    ],
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
                window.location.href = "index.php";
            });

            const achievementBox = document.querySelector('.achievement-box');
            achievementBox.style.display = 'block';

            // Update achievement box content with the values
            const achievementAccuracy = document.getElementById('achievement-accuracy');
            const achievementWpm = document.getElementById('achievement-wpm');
            const achievementCpm = document.getElementById('achievement-cpm');
            const achievementRemarks = document.getElementById('achievement-remarks');

            const totalCharactersTyped = characterIndex + errors;
            const accuracy = (totalCharactersTyped === 0) ? '0%' : (((characterIndex - errors) /
                    totalCharactersTyped) *
                100).toFixed(2) + "%";
            achievementAccuracy.textContent = accuracy;
            achievementWpm.textContent = wpmTag.innerText;
            achievementCpm.textContent = cpmTag.innerText;

            // Show the achievement chart
            const achievementChart = initAchievementChart();
            achievementChart.data.datasets[0].data = [parseFloat(accuracy), parseInt(cpmTag.innerText), parseInt(
                wpmTag
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
        </script>
</body>

</html>