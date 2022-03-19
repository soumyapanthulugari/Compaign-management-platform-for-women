let userDetailsContainer = document.getElementById("userDetails");

function addingResultsToPage(result) {
    let {
        name,
        email,
        workExperience,
        extraCurriculars
    } = result;
    let resultContainer = document.createElement("div");
    resultContainer.classList.add("result-item");
    let nameEl = document.createElement("p");
    nameEl.textContent = "Name " + name;
    resultContainer.appendChild(nameEl);

    let emailEl = document.createElement("p");
    emailEl.textContent = "Email " + email;
    resultContainer.appendChild(emailEl);

    let workExperienceEl = document.createElement("p");
    workExperienceEl.textContent = "Work Experience " + workExperience;
    resultContainer.appendChild(workExperienceEl);

    let extraCurricularsEl = document.createElement("p");
    extraCurricularsEl.textContent = "ExtraCurriculars " + extraCurriculars;
    resultContainer.appendChild(extraCurricularsEl);
}

function displayResults(search_results) {
    for (let result of search_results) {
        addingResultsToPage(result);
    }
}

function fetchResults() {
    let url = "";
    let options = {
        method: "GET"
    };
    fetch(url, options)
        .then(function(response) {
            return response.json();
        })
        .then(function(jsonData) {
            let {
                search_results
            } = jsonData;
            displayResults(search_results);
        });
}
fetchResults();
