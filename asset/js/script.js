document.addEventListener('DOMContentLoaded', function () {
  fetchProblems();
});

function fetchProblems() {
  fetch('ajax/fetch_problems.php')
    .then(response => response.json())
    .then(data => {
      let output = '<h4>📋 Available Problems</h4><ul class="list-group">';
      data.forEach(problem => {
        output += `
          <li class="list-group-item d-flex justify-content-between align-items-center">
            ${problem.title}
            <span class="badge ${getBadgeClass(problem.difficulty)}">${problem.difficulty}</span>
          </li>`;
      });
      output += '</ul>';
      document.getElementById('problemList').innerHTML = output;
    })
    .catch(error => console.error('Error fetching problems:', error));
}

function getBadgeClass(difficulty) {
  switch(difficulty) {
    case 'Easy': return 'bg-success';
    case 'Medium': return 'bg-warning text-dark';
    case 'Hard': return 'bg-danger';
    default: return 'bg-secondary';
  }
}
