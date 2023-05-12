document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
  
      eventClick: function(info) {
        const clickedDate = info.event.start;
        const formattedDate = clickedDate.toISOString().slice(0, 10);
        const date = new Date(formattedDate);
        date.setDate(date.getDate() + 1);
        const newFormattedDate = date.toISOString().slice(0, 10);
        getAppointments(newFormattedDate);
      },
    
      initialView: "dayGridMonth",
      headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "dayGridMonth,timeGridWeek,timeGridDay",
      },
      events: {
        url: 'mother-getAppointmentDetails.php?mom_id=<?php echo $_SESSION["id"];?>',
        method: 'POST',
        format: 'json',
        failure: function() {
            alert('There was an error fetching appointments!');
        },
      },
  
      dayCellDidMount: function(info) {
        const cell = info.el;
        const date = info.date;
        const view = calendar.view;
  
        cell.addEventListener('mouseenter', function() {
            cell.style.backgroundColor = '#029ce41f';
            cell.style.cursor = 'pointer';
        });
  
        cell.addEventListener('mouseleave', function() {
            cell.style.backgroundColor = '';
            cell.style.cursor = '';
        });
      },
  
      // Add the eventContent callback to customize event rendering
      eventContent: function(arg) {
        const appointmentCount = arg.event.title;
      
        const appointmentCountEl = document.createElement('div');
        const appointmentCountText = document.createElement('H5');
        appointmentCountEl.classList.add('appointment-count');
        appointmentCountText.classList.add('appointment-count-text');
        appointmentCountText.textContent = appointmentCount;
        appointmentCountEl.appendChild(appointmentCountText);
      
        return { domNodes: [appointmentCountEl] };
      }
  
      
    });
    
    function getAppointments(date) {
      const xhr = new XMLHttpRequest();
      const mom_id = '<?php echo $_SESSION["id"]; ?>';
      xhr.open('GET', 'mother-calendarView.php?date=' + date + '&mom_id=' + mom_id, true);
      xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          updateDiv(xhr.responseText);
        }
      };
  
      xhr.send();
    }
  
    function updateDiv(responseText) {
      const parser = new DOMParser();
      const htmlDoc = parser.parseFromString(responseText, "text/html");
      const newCalendarRightContent = htmlDoc.querySelector(".calendarRight").innerHTML;
      document.querySelector(".calendarRight").innerHTML = newCalendarRightContent;
    }
    
    calendar.render();
    });
  
    //view popup function-------------------
  
    function appViewPopupFunction(appointmentDetails) {
      document.getElementById("appointmentDetails").innerHTML = appointmentDetails;
      var popup = document.getElementById("appViewPopup");
      popup.classList.toggle("show");
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.appViewPopup-close').addEventListener('click', function() {
        document.getElementById('appViewPopup').classList.toggle('show');
    });
  
    document.getElementById('appViewPopup').addEventListener('click', function(event) {
        if (event.target === this) {
            this.classList.toggle('show');
        }
    });
  });

  //ADD APPOINTMENT POPUP FUNCTION

  function addAppPopupFunction() {
    var popup = document.getElementById("appAddPopup");
    popup.style.display = "block";
}

function closePopup() {
  var popup = document.getElementById("appAddPopup");
  popup.style.display = "none";
}


function updateDocName() {
    const docType = document.querySelector('input[name="doc_type"]:checked').value;
    const docNameSelect = document.querySelector('#docName');

    fetch('mother-getDoctor.php?doc_type=' + docType)
    .then(response => response.json())
        .then(data => {
            docNameSelect.innerHTML = '';
            data.forEach(item => {
                const option = document.createElement('option');
                option.value = item.id;
                option.textContent = item.name;
                docNameSelect.appendChild(option);
                console.log(item);
            });
        });
}

  
  
    
    