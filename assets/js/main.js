/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*==================== REMOVE MENU MOBILE ====================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll('section[id]')

const scrollActive = () =>{
    const scrollDown = window.scrollY

  sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 58,
              sectionId = current.getAttribute('id'),
              sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')
        
        if(scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight){
            sectionsClass.classList.add('active-link')
        }else{
            sectionsClass.classList.remove('active-link')
        }                                                    
    })
}
window.addEventListener('scroll', scrollActive)

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2000,
    delay: 200,
//     reset: true
});

sr.reveal('.home__data, .about__img, .skills__subtitle, .skills__text',{}); 
sr.reveal('.home__img, .about__subtitle, .about__text, .skills__img',{delay: 400}); 
sr.reveal('.home__social-icon',{ interval: 200}); 
sr.reveal('.skills__data, .work__img, .contact__input',{interval: 200}); 

// Project Management Functions
function showAddProjectForm() {
    const modal = document.getElementById('addProjectForm');
    if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        // Focus on the first input
        setTimeout(() => {
            const firstInput = modal.querySelector('input[type="text"]');
            if (firstInput) firstInput.focus();
        }, 100);
    } else {
        console.error('Add project form not found');
    }
}

function hideAddProjectForm() {
    const modal = document.getElementById('addProjectForm');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = '';
        // Reset form
        const form = modal.querySelector('form');
        if (form) form.reset();
    }
}

function showEditProjectForm() {
    const modal = document.getElementById('editProjectForm');
    if (modal) {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        // Focus on the first input
        setTimeout(() => {
            const firstInput = modal.querySelector('input[type="text"]');
            if (firstInput) firstInput.focus();
        }, 100);
    } else {
        console.error('Edit project form not found');
    }
}

function hideEditProjectForm() {
    const modal = document.getElementById('editProjectForm');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = '';
        // Reset form
        const form = modal.querySelector('form');
        if (form) form.reset();
    }
}

async function editProject(id) {
    try {
        const modal = document.getElementById('editProjectForm');
        if (modal) {
            // Show loading state
            const submitButton = modal.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="bx bx-loader-alt bx-spin"></i> Loading...';
            submitButton.disabled = true;

            const response = await fetch(`includes/get_project.php?id=${id}`);
            if (!response.ok) {
                throw new Error('Failed to fetch project data');
            }
            
            const project = await response.json();
            
            // Populate the edit form
            document.getElementById('edit_project_id').value = project.id;
            document.getElementById('edit_title').value = project.title;
            document.getElementById('edit_description').value = project.description;
            document.getElementById('edit_project_url').value = project.project_url;
            
            // Reset button state
            submitButton.innerHTML = originalText;
            submitButton.disabled = false;
            
            // Show the edit form
            showEditProjectForm();
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Failed to load project data. Please try again.');
    }
}

async function deleteProject(id) {
    if (confirm('Are you sure you want to delete this project?')) {
        try {
            const formData = new FormData();
            formData.append('action', 'delete');
            formData.append('id', id);

            const response = await fetch('includes/handle_project.php', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Failed to delete project');
            }

            const result = await response.json();
            
            if (result.success) {
                // Remove the project element from the DOM
                const projectElement = document.querySelector(`[data-project-id="${id}"]`);
                if (projectElement) {
                    projectElement.remove();
                }
                // Reload the page to ensure everything is in sync
                window.location.reload();
            } else {
                throw new Error(result.message || 'Failed to delete project');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Failed to delete project. Please try again.');
        }
    }
}

// Close modals when clicking outside
window.onclick = function(event) {
    const addModal = document.getElementById('addProjectForm');
    const editModal = document.getElementById('editProjectForm');
    
    if (event.target === addModal) {
        hideAddProjectForm();
    }
    if (event.target === editModal) {
        hideEditProjectForm();
    }
}

// Close modals when pressing Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        hideAddProjectForm();
        hideEditProjectForm();
    }
});

// Form submission handlers
document.addEventListener('DOMContentLoaded', function() {
    const addForm = document.querySelector('#addProjectForm form');
    const editForm = document.querySelector('#editProjectForm form');

    if (addForm) {
        addForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            try {
                submitButton.innerHTML = '<i class="bx bx-loader-alt bx-spin"></i> Adding...';
                submitButton.disabled = true;

                const formData = new FormData(this);
                const response = await fetch('includes/handle_project.php', {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    throw new Error('Failed to add project');
                }

                const result = await response.json();
                
                if (result.success) {
                    hideAddProjectForm();
                    window.location.reload();
                } else {
                    throw new Error(result.message || 'Failed to add project');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to add project. Please try again.');
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }

    if (editForm) {
        editForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            try {
                submitButton.innerHTML = '<i class="bx bx-loader-alt bx-spin"></i> Updating...';
                submitButton.disabled = true;

                const formData = new FormData(this);
                const response = await fetch('includes/handle_project.php', {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    throw new Error('Failed to update project');
                }

                const result = await response.json();
                
                if (result.success) {
                    hideEditProjectForm();
                    window.location.reload();
                } else {
                    throw new Error(result.message || 'Failed to update project');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Failed to update project. Please try again.');
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }
});

// Add modal styles
const style = document.createElement('style');
style.textContent = `
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
    }

    .modal-content {
        background-color: #fff;
        margin: 15% auto;
        padding: 2rem;
        border: 1px solid #888;
        width: 90%;
        max-width: 500px;
        border-radius: 0.5rem;
        position: relative;
    }

    .work__actions {
        display: flex;
        gap: 10px;
        margin-top: 10px;
        justify-content: center;
    }

    .work__item {
        position: relative;
    }

    .modal-content form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .modal-content input[type="text"],
    .modal-content input[type="url"],
    .modal-content textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 0.25rem;
    }

    .modal-content textarea {
        min-height: 100px;
        resize: vertical;
    }

    .modal-content .button {
        margin-top: 1rem;
    }
`;
document.head.appendChild(style);
