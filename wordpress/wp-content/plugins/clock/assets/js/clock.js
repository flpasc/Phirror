document.addEventListener('DOMContentLoaded', ()=>{
  const hourHand = document.querySelector('.hand.hours-hand');
  const minutesHand = document.querySelector('.hand.minutes-hand');
  const secondsHand = document.querySelector('.hand.seconds-hand');

  function setTime() {
    let now = new Date();

    let seconds = now.getSeconds();
    let secondsDegrees = ((seconds / 60) * 360) + 90;
    secondsHand.style.transform = `rotate(${secondsDegrees}deg)`;

    let minutes = now.getMinutes();
    let minutesDegrees = ((minutes / 60) * 360) + 90;
    minutesHand.style.transform = `rotate(${minutesDegrees}deg)`;

    let hours = now.getHours();
    let hoursDegrees = ((hours / 12) * 360) + 90;
    hourHand.style.transform = `rotate(${hoursDegrees}deg)`;
  }

  setInterval(setTime, 1000);
  setTime();
});
