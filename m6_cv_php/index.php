<?php require "./header.php"; 

?>

<main>
    <div id="home_hero" class="container-fluid d-flex justify-content-center align-items-center">
        <div class="w-70">
            <form method="POST" action="./cv_template.php">
                <div class=" m-5 p-4 rounded-bottom bg-dark text-white">
                    <h2 class="text-center ">Enter ID To See Your CV</h2>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                    </form>
                    <div class="d-flex justify-content-center">
                        <button id="search" type="submit" class="btn btn-secondary m-4">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center align-items-center my-5">
        <form class="w-50" method="POST" action="./cv_processing.php">
            <div class="mt-4">
                <label for="firstName" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="firstName" placeholder="First name" name="firstName">
            </div>
            <div class="mt-4">
                <label for="lastName" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="lastName" placeholder="Last name" name="lastName">
            </div>
            <div class="mt-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
            </div>
            <div class="mt-4">
                <label for="tel" class="form-label">Phone Number:</label>
                <input type="tel" class="form-control" id="tel" placeholder="Phone Number" name="tel">
            </div>
            <div class="mt-4">
                <label for="linkedin" class="form-label">Linkedin:</label>
                <input type="url" id="linkedin" class="form-control" name="linkedin" placeholder="Linkedin Profile">
            </div>
            <div class="mt-4">
                <label for="github" class="form-label">Github:</label>
                <input type="url" id="github" class="form-control" name="github" placeholder="Github Profile">
            </div>
            <div class="mt-4">
                <label for="education" class="form-label">Education:</label>
                <input type="text" class="form-control" id="education" placeholder="Type Your Degree and Graduation Year" name="education">
                <label for="experiance" class="form-label">Date:</label>
                <input type="date" class="form-control" id="educationDate" placeholder="Type Where you Worked and Duration" name="educationDate">
            </div>
            <div class="mt-4">
                <label for="experiance" class="form-label">Experiance:</label>
                <input type="text" class="form-control" id="experiance" placeholder="Type Where you Worked and Duration" name="experiance">
                <label for="experiance" class="form-label">Date:</label>
                <input type="date" class="form-control" id="experianceDate" placeholder="Type Where you Worked and Duration" name="experianceDate">
            </div>
            <div class="mt-4">
                <label for="skills" class="form-label">Skills:</label>
                <textarea id="skills" class="form-control" aria-label="With textarea" name="skills"></textarea>
            </div>
            <div class="mt-4">
                <label for="languages" class="form-label">Languages:</label>
                <textarea id="languages" class="form-control" aria-label="With textarea" name="languages"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button id="submet" type="submit" class="btn btn-secondary m-4" name="">Submit</button>
            </div>
        </form>
    </div>
</main>

<?php require "./footer.php"; ?>