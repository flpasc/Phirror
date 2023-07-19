document.addEventListener('DOMContentLoaded', ()=>{
  const dateDay = document.querySelector('.date-day');
  const weekDay = document.querySelector('.date-weekday');
  const month = document.querySelector('.date-month');
  const year = document.querySelector('.date-year');

  function setDate(){
    let today = new Date();

// Set current date 
    let date = today.getDate();
    dateDay.textContent = `${date}. `;


// Set the current day
    function setDay(){
      const days = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag']
      return days[today.getDay()];
    }
    weekDay.textContent = setDay();

// Set current month
    function setMonth(){
      let months =["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"];      
      return months[today.getMonth()];
    }
    month.textContent = setMonth();

// Set current year
  //   let dateYear = today.getFullYear();
  //   year.textContent = dateYear;

  }

  setInterval(setDate, 1000);
  setDate();
})
