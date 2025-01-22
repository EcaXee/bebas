const side_bar = `
<div class="sidebar">
            <h4>Admin</h4>
            <ul class="nav flex-column">
                <div class="menu">
                    <li class="nav-item">
                        <div class="profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="white" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <p>nama</p>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/manage_guru.php">
                            Guru
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/manage_siswa.php">
                            Siswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/manage_forum.php">
                            Forum
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/manage_course.php">
                            Course
                        </a>
                    </li>
                </div>
                <div class="home">
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/home.php">
                            Home
                        </a>
                    </li>
                </div>
            </ul>
        </div>
`;
document.getElementById("Side_bar").innerHTML = side_bar;