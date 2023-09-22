
  document.getElementById('generate-pdf').addEventListener('click', function () {
    const element = document.getElementById('your-portfolio-content'); // Replace with the ID of the HTML element containing your portfolio content
    
    html2pdf().from(element).save('your-cv.pdf'); // This will generate and download the PDF
  });

