let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick =() => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const autocompleteList = document.getElementById('autocomplete-list');
    const internshipContainer = document.getElementById('internship-container');
    const internships = internshipContainer.getElementsByClassName('internship');

    // Collect all possible autocomplete suggestions
    const suggestions = [];
    Array.from(internships).forEach(internship => {
        suggestions.push(internship.dataset.title);
        suggestions.push(internship.dataset.company);
        suggestions.push(internship.dataset.location);
        suggestions.push(internship.dataset.duration);
        suggestions.push(internship.dataset.category);
    });

    // Populate the content based on data attributes
    Array.from(internships).forEach(internship => {
        internship.querySelector('h3').textContent = internship.dataset.title;
        internship.querySelector('.company').textContent = `Company: ${internship.dataset.company}`;
        internship.querySelector('.location').textContent = `Location: ${internship.dataset.location}`;
        internship.querySelector('.duration').textContent = `Duration: ${internship.dataset.duration}`;
        internship.querySelector('.category').textContent = `Category: ${internship.dataset.category}`;
    });

    searchInput.addEventListener('input', function() {
        const filter = searchInput.value.toLowerCase();
        autocompleteList.innerHTML = '';

        if (filter) {
            const filteredSuggestions = suggestions.filter(suggestion =>
                suggestion.toLowerCase().includes(filter)
            );

            filteredSuggestions.forEach(suggestion => {
                const suggestionItem = document.createElement('div');
                suggestionItem.textContent = suggestion;
                suggestionItem.classList.add('autocomplete-suggestion');
                suggestionItem.addEventListener('click', function() {
                    searchInput.value = suggestion;
                    autocompleteList.innerHTML = '';
                    filterInternships(suggestion.toLowerCase());
                });
                autocompleteList.appendChild(suggestionItem);
            });
        }

        filterInternships(filter);
    });

    function filterInternships(filter) {
        for (let i = 0; i < internships.length; i++) {
            const title = internships[i].dataset.title.toLowerCase();
            const company = internships[i].dataset.company.toLowerCase();
            const duration = internships[i].dataset.duration.toLowerCase();
            const category = internships[i].dataset.category.toLowerCase();
            const location = internships[i].dataset.location.toLowerCase();

            if (title.includes(filter) || company.includes(filter) || duration.includes(filter) || category.includes(filter) || location.includes(filter)) {
                internships[i].style.display = '';
            } else {
                internships[i].style.display = 'none';
            }
        }
    }
});
