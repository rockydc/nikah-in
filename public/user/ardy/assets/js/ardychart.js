
Chart.defaults.global.defaultFontColor = '#858796';
let attend = 0;
let notattend = 0;
let jmlh_orang_attend = 0;
let jmlh_orang_notattend = 0;
$.ajax({
    type:"GET",
    url:"../Adit-Ika/admin/getrsvp",
    dataType:"json",
    async:false,


    success: function(response){
        
        const result  = response.data
        result.forEach(function(data){
          
         

           if(data.status == 'Hadir'){
              jmlh_orang_attend= jmlh_orang_attend +Number(data.jmlh_orang)
               
               
           }else{
            jmlh_orang_notattend = jmlh_orang_notattend + Number(data.jmlh_orang)
         
           }
        

        })
        attend = attend+jmlh_orang_attend;
        notattend = notattend+jmlh_orang_notattend;
    
    }
  
}).done(function(data){
    return data;
;})
const total = attend + notattend;
// Pie Chart Example
Chart.pluginService.register({
      beforeDraw: function(chart) {
        if (chart.config.options.elements.center) {
          // Get ctx from string
          var ctx = chart.chart.ctx;

          // Get options from the center object in options
          var centerConfig = chart.config.options.elements.center;
          var fontStyle = centerConfig.fontStyle || 'Arial';
          var txt = centerConfig.text;
          var color = centerConfig.color || '#000';
          var maxFontSize = centerConfig.maxFontSize || 75;
          var sidePadding = centerConfig.sidePadding || 20;
          var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
          // Start with a base font of 30px
          ctx.font = "30px " + fontStyle;

          // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
          var stringWidth = ctx.measureText(txt).width;
          var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

          // Find out how much the font can grow in width.
          var widthRatio = elementWidth / stringWidth;
          var newFontSize = Math.floor(30 * widthRatio);
          var elementHeight = (chart.innerRadius * 2);

          // Pick a new font size so it will not be larger than the height of label.
          var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
          var minFontSize = centerConfig.minFontSize;
          var lineHeight = centerConfig.lineHeight || 25;
          var wrapText = false;

          if (minFontSize === undefined) {
            minFontSize = 20;
          }

          if (minFontSize && fontSizeToUse < minFontSize) {
            fontSizeToUse = minFontSize;
            wrapText = true;
          }

          // Set font settings to draw it correctly.
          ctx.textAlign = 'center';
          ctx.textBaseline = 'middle';
          var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
          var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
          ctx.font = fontSizeToUse + "px " + fontStyle;
          ctx.fillStyle = color;

          if (!wrapText) {
            ctx.fillText(txt, centerX, centerY);
            return;
          }

          var words = txt.split(' ');
          var line = '';
          var lines = [];

          // Break words up into multiple lines if necessary
          for (var n = 0; n < words.length; n++) {
            var testLine = line + words[n] + ' ';
            var metrics = ctx.measureText(testLine);
            var testWidth = metrics.width;
            if (testWidth > elementWidth && n > 0) {
              lines.push(line);
              line = words[n] + ' ';
            } else {
              line = testLine;
            }
          }

          // Move the center up depending on line height and number of lines
          centerY -= (lines.length / 2) * lineHeight;

          for (var n = 0; n < lines.length; n++) {
            ctx.fillText(lines[n], centerX, centerY);
            centerY += lineHeight;
          }
          //Draw text in center
          ctx.fillText(line, centerX, centerY);
        }
      }
    });
var ctx = document.getElementById("myPieChart").getContext("2d")
const config ={
    type: 'doughnut',
    data: {
      labels: ['Hadir','Tidak Hadir'],
      datasets: [{
        data: [attend, notattend],
        backgroundColor: ['#0ddb4b','#db3232'],
        hoverBackgroundColor: ['#0ddb4b','#db3232'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }]
    },
 
    options: {
    elements:{
        center:{
            text:`${total}`,
            color:'#FF6384',
            minFontSize:25
        }
    },
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
   
      plugins: {
        datalabels: {
          display: true,
          borderRadius: 3,
      
          font: {
            color: 'black',
            weight: 'bold',
          },
             formatter: (value) => {
            return value + '%';
          }
        },
        doughnutlabel: {
          labels: [{
            text: '100',
            font: {
              color:'red',
              size: 20,
              weight: 'bold'
            }
          }, {
            text: 'total'
          }]
        }
      }
    }
  }
var myPieChart = new Chart(ctx,config
  );
