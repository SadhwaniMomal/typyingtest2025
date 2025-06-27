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
    <title>TypingTwist.com - One_Minute_Hard</title>
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
    padding: 5rem;
    
    }
    
.container button {
  
    margin-top: 3rem;

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
                "The British colonization of America represents a multifaceted and transformative chapter in world history, spanning from the late 16th century to the late 18th century. The journey began with England's initial forays into North America, marked by Sir Walter Raleigh's unsuccessful attempts to establish settlements in present-day North Carolina in the 1580s. The successful colonization efforts gained momentum with the founding of Jamestown, Virginia in 1607, under the sponsorship of the Virginia Company. This settlement, despite initial hardships, laid the foundation for England's sustained presence in the New World. In 1620, the Pilgrims aboard the Mayflower established Plymouth Colony, seeking religious freedom and becoming one of the first English colonies in New England. Throughout the 17th century, additional English colonies were established along the Atlantic coast, including Massachusetts Bay Colony (1630), Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society. Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society. ",
                "Norman Conquest of England, culminating in 1066 with the Battle of Hastings, stands as a pivotal event in English history that reshaped the political, social, and cultural landscape of the island. The catalyst for this conquest was the death of Edward the Confessor in January 1066, sparking a succession crisis that ultimately led to three claimants vying for the English throne: Harold Godwinson, Tostig Godwinson (Harold's brother), and Duke William II of Normandy. Harold Godwinson, the Anglo-Saxon Earl of Wessex, was crowned king in January 1066 but faced immediate challenges from rival claimants. Tostig sought support from King Harald Hardrada of Norway, resulting in the invasion of northern England in September 1066. Meanwhile, Duke William of Normandy prepared his own invasion across the English Channel, backed by papal sanction and a claim of Edward the Confessor's alleged promise of succession. On October 14, 1066, the Norman forces clashed with the Anglo-Saxon army led by Harold Godwinson at the Battle of Hastings, where Harold was killed, marking a decisive victory for Duke William. William's coronation as King of England on Christmas Day solidified Norman rule over England. In the aftermath of the conquest, William implemented significant reforms, including the compilation of the Domesday Book in 1086, a comprehensive survey of landholdings and resources, which facilitated effective governance and taxation. The Norman Conquest ushered in a period of Norman feudalism, centralized monarchy, and cultural assimilation, as Norman French became the language of the court and aristocracy. The conquest also led to the widespread redistribution of land, with Anglo-Saxon nobles dispossessed and Norman nobility granted vast estates. The impact of the Norman Conquest extended beyond England, influencing architecture, law, literature, and language. Romanesque and Gothic architectural styles transformed England's landscape, exemplified by the construction of cathedrals like Canterbury and Durham. The legacy of the Norman Conquest is enduring, shaping the development of English identity and institutions and contributing to the emergence Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "Vikings, originating from Scandinavia in the late 8th century, were seafaring Norse warriors and traders who profoundly influenced European history during the Viking Age (c. 790-1066 CE). The Viking expansion began with raids on coastal regions of Britain, Ireland, and Francia around 793 CE, marked by the devastating sack of the monastery at Lindisfarne. These raids were facilitated by the Vikings' advanced maritime technology, particularly their longships, which allowed them to navigate rivers and oceans swiftly, reaching far-off lands. By the late 9th century, Viking influence extended eastward into Russia, where they established the Volga Trade Route connecting the Baltic Sea with the Byzantine Empire, engaging in lucrative trade and establishing settlements such as Novgorod and Kiev. In 911 CE, Viking leader Rollo was granted the Duchy of Normandy by Frankish King Charles the Simple, paving the way for Viking settlement in France and the subsequent Norman conquest of England in 1066. Viking exploration continued with the discovery of Iceland in 874 CE by Ingólfr Arnarson and Greenland around 982 CE by Erik the Red, who established the first Norse settlement in the New World. Leif Erikson, son of Erik the Red, is credited with leading the Norse discovery of North America around 1000 CE, predating Christopher Columbus by nearly 500 years. The Viking Age drew to a close with the defeat of the Great Heathen Army by Alfred the Great in England and the Christianization of Scandinavia, marking the assimilation of Norse societies into medieval European kingdoms. Beyond their reputation as raiders, the Vikings were also skilled traders who established extensive trade networks, facilitating cultural exchange and economic development. Their influence is evident in the Norse-derived place names, language, and legal customs that persist in regions of Europe, especially in areas of Viking settlement such as the Danelaw in England and the Normandy region of France. Today, the legacy of the Vikings endures in Scandinavian heritage, folklore, and shared cultural influences across nations impacted by their explorations and Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "The Russian Revolution of 1917 was a watershed moment in history, leading to profound political, social, and economic transformations in Russia and beyond. The revolution unfolded in two main phases: the February Revolution and the October Revolution. The February Revolution, ignited by widespread discontent over food shortages, war casualties, and dissatisfaction with Tsar Nicholas II's autocratic rule, culminated in his abdication on March 15, 1917. This event ushered in a period of provisional government composed of moderate socialists and liberals, which aimed to transition Russia towards democracy. However, the provisional government's failure to address critical issues such as land reform and its decision to continue involvement in World War I disillusioned many, especially the urban workers and soldiers who had supported the revolution. The October Revolution, spearheaded by the Bolshevik Party led by Vladimir Lenin, took place on October 25, 1917 (November 7 in the Gregorian calendar), when Bolshevik forces seized key government institutions in Petrograd (now St. Petersburg) and overthrew the provisional government. Lenin's rallying cry of peace, land, and bread resonated with the masses, promising an end to the war, redistribution of land to peasants, and relief from food shortages. The Bolsheviks swiftly consolidated power, establishing Soviet control through the Congress of Soviets and the All-Russian Central Executive Committee. The Bolsheviks initiated radical reforms, including the nationalization of industry, banks, and land, and the establishment of worker and peasant councils (soviets) as the foundation of governance. These measures signaled a departure from capitalist norms, aiming to construct a socialist society based on Marxist principles. However, the revolution ignited resistance, leading to the Russian Civil War (1917-1922) between the Bolshevik Red Army and anti-Bolshevik White Army, supported by foreign powers. The Russian Revolution not only transformed Russia into the world's first communist state but also inspired revolutionary movements globally, impacting political ideologies and Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "history of Islam spans over fourteen centuries, beginning with the revelations received by the Prophet Muhammad in the early 7th century. Muhammad's mission in Mecca and Medina laid the foundations of a new monotheistic faith centered on the belief in Allah as the one true God. By the time of Muhammad's death in 632, Islam had spread across the Arabian Peninsula. The Rashidun Caliphate (632-661) followed, with the leadership of Abu Bakr, Umar, Uthman, and Ali, spreading Islam through military conquests across Persia, Byzantine territories, and North Africa. The Umayyad Caliphate (661-750) continued the expansion, establishing a vast Islamic empire from Spain in the west to Central Asia in the east. The Abbasid Caliphate (750-1258) marked a golden age of Islamic civilization, with Baghdad as its cultural and intellectual center. During this period, Islamic scholars made significant contributions to science, philosophy, and art, preserving and transmitting ancient knowledge to Europe. The decline of the Abbasids led to the rise of regional dynasties such as the Seljuks and the Fatimids. Meanwhile, the Crusades (1095-1291) marked a series of conflicts between Muslims and Christians over control of the Holy Land. The Mongol invasions (13th-14th centuries) further weakened Muslim empires, although Islamic culture persisted and even flourished under Mongol rule in some regions. The Ottoman Empire (1299-1922) emerged as a powerful Muslim state, reaching its peak under Suleiman the Magnificent in the 16th century. However, by the 19th century, European colonialism had begun to erode the power of Islamic empires, leading to widespread political and social changes across the Muslim world. The 20th century witnessed the end of the Ottoman Empire and the emergence of modern nation-states in the Middle East and beyond, with varying degrees of secularism and Islamism shaping political ideologies. The 1979 Iranian Revolution and the subsequent rise of Islamist movements highlighted the ongoing tension between tradition and modernity within the Islamic world. Today, Islam is practiced by over a billion people worldwide, with diverse Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "Terrorism in Pakistan has been a persistent and multifaceted challenge, with significant impacts on the country's security, stability, and socio-economic development. The roots of modern terrorism in Pakistan can be traced back to the Soviet-Afghan War in the 1980s, when Pakistan, along with the United States and other allies, supported Afghan mujahideen fighters against Soviet forces. This conflict not only led to the influx of foreign fighters and weapons into Pakistan but also fueled the rise of radical Islamist ideologies that later contributed to domestic extremist groups. The 9/11 attacks in 2001 further intensified the problem as Pakistan became a frontline state in the U.S.-led war on terror. The subsequent military operations against militant groups in the tribal areas along the Afghan border, such as Operation Zarb-e-Azb and Operation Radd-ul-Fasaad, aimed to dismantle terrorist networks operating on Pakistani soil. However, terrorist attacks continued to target civilian populations, religious minorities, and security forces, highlighting the persistent threat posed by groups like the Tehrik-i-Taliban Pakistan (TTP), Lashkar-e-Jhangvi (LeJ), and others affiliated with Al-Qaeda and the Islamic State (IS). Notable attacks include the Peshawar school massacre in 2014, the attack on the Army Public School in Quetta in 2016, and the bombing of the Lal Shahbaz Qalandar shrine in 2017, among others. Despite significant efforts by the Pakistani government to counter terrorism through military operations, intelligence-led actions, and legislative measures, the challenge remains complex due to factors such as external influences, porous borders, socio-economic grievances, and ideological extremism. The impact of terrorism on Pakistan's society and economy has been profound, affecting public confidence, foreign investment, and the overall quality of life. Moving forward, addressing the root causes of terrorism, promoting inclusive governance, and fostering regional cooperation remain critical strategies in combating terrorism effectively and ensuring lasting peace and security in Pakistan. Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "relationship between Pakistan and India has been complex and marked by a history of conflict, diplomacy, and occasional attempts at peace since their partition in 1947. The partition of British India into two independent states, India and Pakistan, led to communal violence and mass migrations, setting the stage for decades of strained relations. The first major war between the two countries occurred shortly after partition, in 1947-48, over the region of Jammu and Kashmir, which remains a central point of contention to this day. Subsequent conflicts followed in 1965, primarily over Kashmir, and in 1971, resulting in the secession of East Pakistan (now Bangladesh) after a war that saw India's involvement supporting the Bangladeshi independence movement. The conflict over Kashmir has remained unresolved, with both countries claiming the region in its entirety. Despite efforts at diplomatic engagement, including the Shimla Agreement of 1972 and various confidence-building measures, tensions have persisted due to cross-border terrorism, territorial disputes, and ideological differences. The Kargil conflict in 1999 and the 2001-2002 military standoff further strained relations. Efforts to resume peace talks have often been derailed by terrorist attacks, such as the 2008 Mumbai attacks. However, both countries have intermittently engaged in dialogue, with periods of thaw and exchange, particularly in economic and cultural spheres. The recent ceasefire agreement in 2021 aimed to reduce border tensions, but challenges persist amid domestic political dynamics and external pressures, highlighting the enduring complexities and significance of Indo-Pak relations in South Asia. Efforts by both sides to improve ties have often been overshadowed by historical grievances, geopolitical ambitions, and internal dynamics, underscoring the need for sustained dialogue and confidence-building measures to promote stability and cooperation in the region. Despite these challenges, there have been instances of cooperation, such as the opening of the Kartarpur Corridor in 2019 to facilitate Sikh pilgrimages between the two countries, demonstrating Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "history of Pakistan spans millennia, with its roots in ancient civilizations like the Indus Valley Civilization, which flourished around 2500 BCE. Over the centuries, the region saw the rise and fall of various empires, including the Maurya, Kushan, Gupta, and later the Mughal Empire, which reached its zenith in the 16th and 17th centuries. By the mid-18th century, the Indian subcontinent came under British colonial rule through the British East India Company. Following the Indian Rebellion of 1857, direct British governance replaced the East India Company, and the territory was formally known as British India. The 20th century witnessed the rise of nationalist movements advocating for independence from British rule. The All-India Muslim League, under the leadership of Muhammad Ali Jinnah, played a pivotal role in advocating for the rights of Muslims in a predominantly Hindu-majority subcontinent. In 1940, the Lahore Resolution called for the creation of independent states for Muslims, leading to the eventual partition of British India in 1947. On August 14th, 1947, Pakistan emerged as an independent nation, comprising West Pakistan (modern-day Pakistan) and East Pakistan (later became Bangladesh). This partition marked a tumultuous period characterized by mass migrations, communal violence, and the struggle to establish governance. The early years of Pakistan's existence were marked by efforts to define its identity, establish democratic institutions, and address socio-economic challenges stemming from partition. However, internal tensions between the eastern and western wings of the country, exacerbated by political and economic disparities, culminated in the secession of East Pakistan and the birth of Bangladesh in December 1971, following a bloody conflict. The post-independence period in Pakistan has been characterized by periods of military rule interspersed with civilian governments, with significant geopolitical challenges, including conflicts with India over Kashmir and involvement in the Soviet-Afghan War during the 1980s. Pakistan's strategic location and involvement in regional and global affairs have shaped its Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "British colonization of America, spanning the 17th and 18th centuries, represents a complex historical process marked by exploration, settlement, conflict, and cultural exchange. The initial phase began in the early 1600s with the establishment of British colonies along the eastern seaboard of North America. Jamestown, founded in 1607 in Virginia, and Plymouth, settled by the Pilgrims in 1620 in present-day Massachusetts, were among the earliest permanent English settlements. Motivated by various factors including economic opportunity, religious freedom, and territorial expansion, these colonies faced significant challenges such as disease, famine, and conflicts with Native American tribes. Despite hardships, the British colonies grew through agricultural pursuits, particularly the cultivation of cash crops like tobacco, rice, and indigo, which drove economic development and trade with Europe. The British colonization of America unfolded within the broader context of European imperial competition. Britain's colonization efforts were part of a larger struggle for dominance in the New World, competing with other European powers like Spain and France. The British Empire expanded its presence in America through charters granted to joint-stock companies and royal proprietors, leading to the establishment of proprietary and royal colonies with distinct governance structures. The growth of the British colonies coincided with increased tensions between the colonies and Britain over issues of taxation, representation, and autonomy. The relationship between the American colonies and Britain deteriorated over time, culminating in the American Revolutionary War (1775-1783). The conflict arose from grievances over British policies such as the Stamp Act, Tea Act, and Intolerable Acts, which were perceived as unjust by the American colonists. The war resulted in the Declaration of Independence in 1776 and ultimately the Treaty of Paris in 1783, which recognized the independence of the United States and marked the end of formal British rule over the thirteen colonies. The legacy of British colonization in America is profound and enduring Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "America is a captivating journey through time, marked by pivotal events and transformative milestones. It all began with Christopher Columbus's voyage in 1492, which opened the door to European exploration and colonization of the Americas. In 1607, the English established their first permanent settlement at Jamestown, Virginia, ushering in the era of British colonization. The early 17th century saw the Mayflower Compact signed by Pilgrims in 1620, laying the foundation for self-governance. Fast forward to July 4, 1776, when the Declaration of Independence was adopted, proclaiming America's autonomy from British rule. The subsequent Revolutionary War (1775-1783) culminated in the Treaty of Paris in 1783, recognizing the United States as an independent nation. The drafting of the U.S. Constitution in 1787 established the framework for the federal government, with George Washington becoming the first president in 1789. America's territorial expansion was catalyzed by the Louisiana Purchase in 1803, doubling the nation's size under President Thomas Jefferson. The mid-19th century was marred by the Civil War (1861-1865), triggered by secessionist sentiments and culminating in the abolition of slavery with the Emancipation Proclamation in 1863. The Reconstruction Era followed, attempting to heal the nation's wounds and grant civil rights to freed slaves. The latter half of the 19th century witnessed rapid industrialization and westward expansion, epitomized by the completion of the transcontinental railroad in 1869. America emerged as a global power in the early 20th century, intervening in World War I (1917-1918) and experiencing the Roaring Twenties followed by the Great Depression of the 1930s. The attack on Pearl Harbor in 1941 drew the U.S. into World War II (1941-1945), leading to its emergence as a superpower alongside the Soviet Union. The post-war era was defined by the Cold War (1947-1991), a period of ideological confrontation with the USSR, and significant social movements such as the Civil Rights Movement in the 1950s and 1960s. The late 20th century witnessed the Watergate scandal (1972), which led Rhode Island (1636), Connecticut (1636), Maryland (1634), and Carolina (1663). The establishment of proprietary colonies like Pennsylvania (1681) under William Penn and royal colonies like Georgia (1732) further expanded British territorial claims. The 18th century witnessed significant growth and conflict in the British American colonies, with the French and Indian War (1754-1763) solidifying British dominance in North America at the expense of France. The aftermath of the war, however, led to increased tensions between Britain and its American colonies over issues of taxation and governance, culminating in the American Revolutionary War (1775-1783). The Declaration of Independence in 1776 marked the colonies' formal break from British rule, and the Treaty of Paris in 1783 recognized the United States as an independent nation. The British colonization of America profoundly influenced global history, shaping the economic, political, and cultural development of both the Old and New Worlds. The legacy of British colonialism in America endures in the foundations of American institutions, legal systems, language, and societal norms, reflecting a complex interplay of exploration, exploitation, and innovation that continues to resonate in contemporary society.",
                "The Earth's evolution spans billions of years, shaped by geological processes, biological evolution, and environmental changes. It began around 4.6 billion years ago, as a result of the accretion of cosmic dust and gas in the early solar system. Over time, the Earth's surface underwent significant transformations, leading to the formation of continents, oceans, and diverse ecosystems. One of the most profound changes in Earth's history was the emergence of life, which occurred around 3.5 billion years ago. Simple single-celled organisms evolved into complex multicellular life forms through processes such as natural selection and genetic mutation. These organisms played a crucial role in shaping the planet's atmosphere and environment, leading to the rise of oxygen levels and the establishment of the biosphere. Throughout Earth's history, various extinction events have occurred, reshaping the course of evolution and paving the way for new forms of life to emerge. The study of Earth's evolution provides insights into the interconnectedness of geological, biological, and environmental processes, highlighting the dynamic nature of our planet and the ongoing changes that continue to shape its future. As the Earth continued to evolve, geological processes like plate tectonics played a pivotal role in shaping the planet's surface. Continents drifted and collided, leading to the formation of mountain ranges, ocean basins, and volcanic activity. These processes also influenced climate patterns and the distribution of species across the globe. The evolution of life on Earth followed a complex trajectory, marked by periods of rapid diversification and mass extinctions. The Cambrian Explosion, around 541 million years ago, saw a remarkable burst of biodiversity, with the emergence of various animal phyla. Subsequent periods, such as the Devonian and Permian, witnessed the colonization of land by plants and animals, leading to the establishment of terrestrial ecosystems. Mass extinction events, like thePermian-Triassic andCretaceous-Paleogene extinctions, had profound impacts on Earth's biota, wiping out entire species and clearing the stage for new evolutionary pathways. These events were often triggered by factors such as asteroid impacts, volcanic eruptions, or climate change, highlighting the vulnerability of life on our planet. The evolution of humans is a relatively recent chapter in Earth's history, with Homo sapiens appearing around 300,000 years ago in Africa. Through migration and adaptation, humans spread across the globe, developing diverse cultures and societies. The rise of civilization brought about significant changes to the planet, including deforestation, urbanization, and the exploitation of natural resources. In modern times, human activities have become dominant drivers of environmental change, leading to issues such as climate change, habitat destruction, and species extinction. Understanding the evolution of Earth provides valuable insights into the interconnectedness of natural systems and the importance of preserving biodiversity and ecosystems for future generations. Continuing from where we left off, the ongoing impact of human activities on Earth's systems is evident in various ways. Industrialization and the burning of fossil fuels have led to the accumulation of greenhouse gases in the atmosphere, resulting in global warming and climate change. ",
                "First language acquisition is a fascinating process that occurs naturally in children as they learn their native language. This process is often seamless and efficient, despite the complexity of language. Linguists and psychologists have studied first language acquisition extensively to understand how children acquire language skills, from their first babblings to fluent speech. Several theories have been proposed to explain this phenomenon, including the behaviorist, nativist, interactionist, and cognitive approaches. The behaviorist perspective, popularized by B.F. Skinner, suggests that language is learned through environmental stimuli and reinforcement. According to this view, children acquire language by imitating the speech they hear around them and receiving positive feedback when they produce correct utterances. However, while imitation and reinforcement play a role in language development, they cannot fully account for the complexity and creativity of children's language use. In contrast, the nativist perspective, championed by Noam Chomsky, posits that humans are born with an innate capacity for language acquisition. Chomsky's theory of Universal Grammar proposes that all human languages share a common underlying structure, and children are genetically predisposed to acquire this structure. This perspective emphasizes the role of innate linguistic knowledge in language development and suggests that children are not simply imitating the language they hear but are actively constructing grammatical rules based on the input they receive. The interactionist perspective integrates elements of both behaviorism and nativism, emphasizing the importance of both environmental input and innate predispositions in language acquisition. This view acknowledges the role of social interaction and language exposure in shaping children's language development while also recognizing the existence of innate language mechanisms that facilitate learning. Furthermore, the cognitive perspective highlights the role of cognitive processes such as memory, attention, and problem-solving in language acquisition. According to this view, children's language development is influenced by their cognitive abilities and the cognitive demands of language learning tasks. For example, children may use cognitive strategies such as chunking and analogical reasoning to learn new words and grammatical structures. Regardless of the theoretical perspective adopted, first language acquisition typically follows a predictable sequence of stages. During the prelinguistic stage, infants engage in nonverbal communication through gestures, facial expressions, and vocalizations. Around 12 months of age, they begin to produce their first words, entering the holophrastic stage, where single words are used to convey complex meanings. Over time, children progress to the two-word, telegraphic stage, where they combine words to form simple sentences. As they continue to develop, their vocabulary and syntactic skills expand, leading to more complex and fluent speech. Throughout the process of first language acquisition, children demonstrate remarkable sensitivity to the linguistic input they receive. They are able to extract regularities from the language around them, such as word order patterns and grammatical rules, even in the absence of explicit instruction. This ability to implicitly learn the structure of ",
                "Born around 1162 as Temujin, Genghis Khan's early life was harsh. After his father's death, his family was ostracized by their tribe and forced to live in poverty. This struggle for survival instilled in him both cunning and an iron will. Through a combination of strategic alliances, ruthless conquest, and innovative military tactics like mounted archers and a highly disciplined army, Temüjin united the previously fractured Mongol tribes in 1206, earning the title Genghis Khan, Universal Ruler. His ambitions didn't stop there. He launched a series of brutal campaigns, conquering vast swathes of China, Central Asia, and Persia. While his empire, the largest contiguous land empire in history, was built on bloodshed, it also facilitated trade and cultural exchange across Eurasia on an unprecedented scale. The Silk Road flourished under Mongol control. Despite his fearsome reputation, Genghis Khan implemented a surprisingly progressive legal code, the Yassa, which standardized punishments and promoted religious tolerance within the empire. He also adopted and integrated useful technologies and knowledge from conquered civilizations. However, the brutality of his conquests and the harsh rule of the Mongol Empire left a lasting negative impact on many regions. Genghis Khan died in 1227, but his successors continued to expand the empire, shaping the political landscape of Eurasia for centuries to come. Genghis Khan wasn't just a ruthless conqueror; he was a brilliant strategist and military reformer. He standardized military tactics, emphasizing mobility and communication with a highly disciplined cavalry force. His use of mounted archers, siege warfare advancements, and psychological tactics like intimidation all contributed to his victories. Unification and Law: Before Genghis Khan, the Mongol tribes were constantly at war with each other. He united them under a single banner, fostering a sense of Mongol identity. He also established the Yassa, a legal code that brought a degree of order and standardized punishments across the vast empire. Religious Tolerance (with limits): While Genghis Khan wasn't above using religion to control conquered populations, he surprised many by promoting religious tolerance within his empire. This pragmatic approach ensured stability and allowed conquered peoples to maintain their own faiths, as long as they submitted to Mongol rule. Cultural Exchange: The Mongol conquests weren't just about destruction. They also led to a massive exchange of ideas and cultures across Eurasia. Goods, technologies, and even artistic styles flowed more freely than ever before. This exchange had a lasting impact on the development of civilizations across the continent. Legacy of Brutality: It's impossible to ignore the brutality of Genghis Khan's conquests. Entire cities were razed, and civilian massacres were not uncommon. The Mongol Empire's harsh rule left a lasting negative impact on many regions. Successors and Impact: Genghis Khan's death in 1227 didn't mark the end of the Mongol story. His successors, including his grandson Kublai Khan, further expanded the empire, reaching from Korea to Eastern Europe. The Mongol Empire's influence shaped Eurasia for centuries, impacting trade, political structures, and even demographics. Genghis Khan remains a complex and controversial figure. He was a ruthless conqueror who built a vast empire, but also a visionary ",
                "Spain's rich tapestry stretches back millennia. Inhabited by Iberians, Celts, and Phoenicians, it was unified under the Romans as Hispania. After the Roman decline, Germanic tribes and then Moors from North Africa held sway. The Christian kingdoms of Castile and Aragon gradually reconquered the peninsula, culminating in the dramatic expulsion of the Moors in 1492. This same year, Columbus' voyage under Spanish auspices ushered in an era of exploration and empire building in the Americas. Spain's Golden Age in the 16th and 17th centuries saw vast wealth flow in, funding art and literature but also leading to inflation and decline. Weakened by wars and political turmoil, Spain lost its dominance, but retained a vast colonial empire for centuries. The 19th and early 20th centuries were marked by instability, including a brutal civil war, before the establishment of a modern constitutional monarchy in 1975. Today, Spain is a vibrant democracy and a major player in the European Union. Spain's history is a whirlwind of conquest, cultural exchange, and internal struggle. Early inhabitants like Iberians and Celts laid the foundation, with Phoenicians and Greeks establishing trade routes. The Romans arrived in 2nd century BC, leaving behind a lasting influence on language, law, and architecture. Following the Roman Empire's fall, Germanic tribes like the Visigoths carved out kingdoms, only to be swept away by the Muslim conquest of the 8th century. This Islamic period, Al-Andalus, brought a golden age of science, art, and philosophy, leaving its mark on language, agriculture, and architecture. Meanwhile, Christian kingdoms in the north, Asturias and then Castile and Aragon, began the Reconquista, a centuries-long fight to reclaim the peninsula. 1492 marked a turning point: the completion of the Reconquista with the fall of Granada, and Columbus' voyage to the Americas, launching Spain's vast colonial empire. The 16th and 17th centuries were a golden age fueled by American riches, funding art (El Greco, Velazquez) and literature (Cervantes), but also leading to inflation and decline. Weakened by wars and internal strife, Spain lost its dominance, though its colonies remained for centuries. The 19th and early 20th centuries were marked by instability, including Napoleon's invasion and a brutal civil war. Finally, in 1975, Francisco Franco's dictatorship died with him, paving the way for a modern constitutional monarchy. Today, Spain is a thriving democracy, a major player in the European Union, and a country forever shaped by the rich tapestry of its past. Spain's history is a captivating saga, a constant ebb and flow of cultures and powers. Prehistoric cave paintings whisper of the first inhabitants. Iberians, Celts, and Phoenicians laid the groundwork, with Greeks establishing vibrant trade routes. The powerful Romans arrived in the 2nd century BC, leaving an indelible mark on language, law, and architecture that endures today. Following the Roman decline, Germanic tribes like the Visigoths held sway, only to be swept away by the Islamic conquest of the 8th century. This period, known as Al-Andalus, ushered in a golden age of science, art, and philosophy. Arabic words enriched the Spanish language, while advancements in agriculture and stunning architecture, like the Alhambra palace, stand as testaments to this era's brilliance. However, in the north, Christian kingdoms ",
                "Grand Theft Auto VI is poised to be a sprawling open-world adventure set in a fictionalized version of Florida, with Vice City (based on Miami) taking center stage. Players might control a duo of criminals, Lucia and her partner, navigating the criminal underworld in a modern-day version of this neon-soaked metropolis. Expect Rockstar's signature brand of satire lampooning contemporary American culture, with references to social media and internet trends likely woven into the story. Release is slated for 2025, exclusively for PlayStation 5 and Xbox Series X/S. Grand Theft Auto VI is shrouded in anticipation, promising a return to the sun-drenched criminal paradise of Vice City (inspired by Miami) in a modern-day setting. Rumors suggest players might control a Bonnie-and-Clyde style duo, Lucia and her partner, as they navigate the seedy underbelly of this neon-lit metropolis. Rockstar's trademark sharp wit will likely skewer contemporary American culture, with social media and internet trends potentially influencing the narrative. While details are scarce, leaked footage hints at a sprawling open world ripe for exploration, with whispers of character customization and evolving storylines adding fuel to the fire. Originally expected for a 2025 release on PlayStation 5 and Xbox Series X/S, recent reports suggest a possible delay, keeping fans eagerly awaiting the official reveal and a chance to dive back into the world of Grand Theft Auto. Grand Theft Auto VI is shrouded in secrecy, but rumors paint a picture of a return to a modernized Vice City, the fictionalized Miami fans know and love. Players might take on the roles of a criminal duo, like a modern Bonnie and Clyde, navigating the neon-drenched underbelly alongside a cast of colorful characters. Rockstar's signature sharp wit will likely skewer contemporary American culture, with social media and internet trends potentially woven into the story and missions. Leaks hint at a sprawling open world filled with diverse environments, from the glitzy beaches to the crime-ridden back alleys. Customization options for characters and vehicles are also rumored, letting you tailor your criminal persona. The narrative could be more dynamic than previous entries, with player choices potentially influencing the storyline. Originally slated for a 2025 release on PlayStation 5 and Xbox Series X/S, recent reports suggest a possible delay. This only fuels the anticipation of fans eager for an official reveal and a chance to wreak havoc in a reimagined Vice City. Grand Theft Auto VI simmers with anticipation, a potential return to a neon-drenched, modern-day Vice City (think Miami with a Rockstar twist). Rumors swirl about a Bonnie-and-Clyde style duo – Lucia and her partner – navigating the criminal underworld alongside a cast of colorful characters. Rockstar's trademark satire will likely take aim at contemporary American culture, with social media trends and internet culture possibly influencing missions and the overall narrative. Leaks hint at a sprawling open-world playground, encompassing everything from the glitzy beaches to the grimy back alleys, all ripe for exploration. Customization options for your criminal persona, from character appearance to tricked-out vehicles, are also rumored. The story itself might be more dynamic than past entries, with player choices potentially shaping the narrative in exciting ways. Originally",
                "Einstein's legacy in history and science is monumental. His groundbreaking theories revolutionized our understanding of the universe, fundamentally altering the course of physics and shaping modern technology. Here's an in-depth exploration of his life, work, and enduring contributions: Albert Einstein, born in 1879 in Ulm, Germany, was a towering figure in the history of science. His early life was marked by academic brilliance, but also by rebellion against authority. He struggled in school due to his unconventional thinking and disdain for rote learning, which foreshadowed his later defiance of traditional scientific dogma. Einstein's most famous equation, E=mc^2, emerged from his theory of special relativity, published in 1905. This equation revolutionized physics by showing the equivalence of mass and energy, laying the foundation for nuclear energy and the atomic bomb. Special relativity also introduced the concept of spacetime, where space and time are interconnected, challenging Newtonian mechanics and paving the way for modern cosmology. In 1915, Einstein completed his theory of general relativity, which described gravity as the curvature of spacetime caused by mass and energy. This theory predicted phenomena like gravitational time dilation and the bending of light around massive objects, which were confirmed through subsequent experiments and observations. General relativity provided the framework for understanding the universe on the largest scales, from the behavior of galaxies to the structure of black holes. Einstein's work on quantum mechanics, though initially met with skepticism, played a crucial role in its development. He received the Nobel Prize in Physics in 1921 for his explanation of the photoelectric effect, which demonstrated the particle-like nature of light and laid the groundwork for quantum theory. Despite his reservations about certain aspects of quantum mechanics, Einstein's contributions were instrumental in shaping the field and inspiring future research. Beyond his scientific achievements, Einstein was a passionate advocate for peace, civil rights, and social justice. He spoke out against militarism, fascism, and racism, using his platform to champion humanitarian causes. His involvement in the civil rights movement in the United States, particularly his support for African American civil rights leaders like W.E.B. Du Bois, underscored his commitment to equality and justice. Einstein's legacy extends far beyond his scientific discoveries. His name has become synonymous with genius, curiosity, and independent thinking. He continues to inspire scientists, thinkers, and activists around the world, reminding us of the power of imagination and the importance of questioning the status quo. As we grapple with the challenges of the 21st century, Einstein's spirit of innovation and his belief in the unity of knowledge remain as relevant as ever. Einstein's early years were marked by intellectual curiosity and a deep fascination with mathematics and physics. Despite facing challenges in the traditional education system, he excelled in his self-directed studies and eventually gained admission to the Swiss Federal Institute of Technology (ETH Zurich). After graduating in 1900, he struggled to find academic employment and worked in various low-level positions before securing a job as a patent clerk in Bern, Switzerland. It was during his time as",

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