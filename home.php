<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#home" class="nav__logo">Portfolio</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'm <span class="home__title-color">Kenneth</span><br>A Web Developer</h1>

                    <a href="#about" class="button">Explore More</a>

                    <div class="home__social">
                        
                        <a href="https://www.facebook.com/kenneth.baldomar.1" class="home__social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/callmekennnnn0/" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                        <a href="https://github.com/ItsmeHaru-hub" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                    </div>                    
                </div>



                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="100" y="120" href="assets/img/perfil.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">Hi I'm Kenneth</h2>
                        <p class="about__text">Being a web developer means creating the building blocks of the digital world. From simple websites to complex web applications, web developers are responsible for designing, coding, and maintaining the user-facing and behind-the-scenes elements of the internet. It’s a role that blends creativity with logic, requiring an understanding of design principles, programming languages like HTML, CSS, and JavaScript, and the ability to solve problems efficiently. Whether working on a team or independently, web developers play a key role in shaping how people interact with technology every day.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">
                        Proficient in HTML, animations, responsive design, ES6+, DOM manipulation, JavaScript, usability, wireframing, prototyping, and design software, with excellent usability and design sense.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-paint skills__icon'></i>
                                <span class="skills__name">UX/UI</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">My Projects</h2>

                <?php
                require_once 'includes/project_operations.php';
                $projects = getAllProjects();
                ?>

                <div class="work__container">
                    <div class="work__item work__add-card">
                        <button onclick="showAddProjectForm()" class="button work__add-btn">
                            <i class='bx bx-plus-circle'></i>
                            Add New Project
                        </button>
                    </div>
                    <?php foreach($projects as $project): ?>
                    <div class="work__item" data-project-id="<?php echo $project['id']; ?>">
                        <a href="<?php echo htmlspecialchars($project['project_url']); ?>" class="work__img">
                            <img src="<?php echo htmlspecialchars($project['image_path']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                            <div class="work__overlay">
                                <h3 class="work__title"><?php echo htmlspecialchars($project['title']); ?></h3>
                                <p class="work__description"><?php echo htmlspecialchars($project['description']); ?></p>
                            </div>
                        </a>
                        <div class="work__actions">
                            <button onclick="editProject(<?php echo $project['id']; ?>)" class="button">
                                <i class='bx bx-edit-alt'></i>
                                Edit
                            </button>
                            <button onclick="deleteProject(<?php echo $project['id']; ?>)" class="button delete">
                                <i class='bx bx-trash'></i>
                                Delete
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Add Project Form -->
                <div id="addProjectForm" class="modal">
                    <div class="modal-content">
                        <span class="modal-close" onclick="hideAddProjectForm()">&times;</span>
                        <h3>Add New Project</h3>
                        <form action="includes/handle_project.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="add">
                            <div class="form-group">
                                <label for="title">Project Title</label>
                                <input type="text" id="title" name="title" placeholder="Enter project title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Project Description</label>
                                <textarea id="description" name="description" placeholder="Enter project description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Project Image</label>
                                <input type="file" id="image" name="image" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label for="project_url">Project URL (Optional)</label>
                                <input type="url" id="project_url" name="project_url" placeholder="Enter project URL">
                            </div>
                            <div class="form-buttons">
                                <button type="submit" class="button">
                                    <i class='bx bx-plus'></i>
                                    Add Project
                                </button>
                                <button type="button" onclick="hideAddProjectForm()" class="button">
                                    <i class='bx bx-x'></i>
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Edit Project Form -->
                <div id="editProjectForm" class="modal">
                    <div class="modal-content">
                        <span class="modal-close" onclick="hideEditProjectForm()">&times;</span>
                        <h3>Edit Project</h3>
                        <form action="includes/handle_project.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="edit">
                            <input type="hidden" name="id" id="edit_project_id">
                            <div class="form-group">
                                <label for="edit_title">Project Title</label>
                                <input type="text" id="edit_title" name="title" placeholder="Enter project title" required>
                            </div>
                            <div class="form-group">
                                <label for="edit_description">Project Description</label>
                                <textarea id="edit_description" name="description" placeholder="Enter project description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="edit_image">Project Image</label>
                                <input type="file" id="edit_image" name="image" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label for="edit_project_url">Project URL (Optional)</label>
                                <input type="url" id="edit_project_url" name="project_url" placeholder="Enter project URL">
                            </div>
                            <div class="form-buttons">
                                <button type="submit" class="button">
                                    <i class='bx bx-save'></i>
                                    Update Project
                                </button>
                                <button type="button" onclick="hideEditProjectForm()" class="button">
                                    <i class='bx bx-x'></i>
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
                <div class="contact__container">
                    <div class="contact__details">
                        <h3>Contact Details</h3>
                        <ul>
                            <li><i class='bx bx-envelope'></i> kenneth.baldomar@csucc.edu.ph <br>
                            kennethbaldomar017@gmail.com</li>
                            <li><i class='bx bx-phone'></i> +639 564 610 460 <br>
                            +639 510 815 390</li>
                            <li><i class='bx bx-map'></i>Purok 2 Barangay 9 Quarry <br> Cabadbaran City, Agusan del Norte</li>
                            <li>
                                <a href="https://www.facebook.com/kenneth.baldomar.1" target="_blank"><i class='bx bxl-facebook'></i></a>
                                <a href="https://www.instagram.com/callmekennnnn0/" target="_blank"><i class='bx bxl-instagram'></i></a>
                                <a href="https://github.com/yourprofile" target="_blank"><i class='bx bxl-github'></i></a>
                            </li>
                        </ul>
                    </div>
                    <form action="" class="contact__form">
                        <div class="contact__form-group">
                            <input type="text" id="contact_name" placeholder=" " class="contact__input" required>
                            <label for="contact_name">Name</label>
                        </div>
                        <div class="contact__form-group">
                            <input type="email" id="contact_email" placeholder=" " class="contact__input" required>
                            <label for="contact_email">Email</label>
                        </div>
                        <div class="contact__form-group">
                            <textarea id="contact_message" placeholder=" " class="contact__input" rows="6" required></textarea>
                            <label for="contact_message">Enter your message...</label>
                        </div>
                        <button type="submit" class="contact__button button">Send</button>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__copy">&#169; Callmeken's Portfolio. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>