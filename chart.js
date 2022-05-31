
const data = {
  labels: [
    'HTML',
    'CSS',
    'SCSS',
    'JS',
    'BOOTSTRAP',
    'PHP',
    'MYSQL'
  ],
  datasets: [{
    label: 'Skills Used making this projects on scale of 10',
    data: [8, 9, 9, 7, 10,8,10],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(75, 192, 192)',
      'rgb(255, 205, 86)',
      'rgb(201, 203, 207)',
      'rgb(54, 162, 235)'
    ]
  }]
};

const config = {
  type: 'polarArea',
  data: data,
  options: {
  }
};

//   config
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

  let 