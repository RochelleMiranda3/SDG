<?php include('../../includes/header.php');
include '../../includes/db.php';?>


<?php if (isset($_GET['message'])) { ?>
            <p class="text-center bg-success bg-gradient text-light p-4"><?php echo $_GET['message']; ?></p>
        <?php } ?>
<div class="container mt-5 mb-5">
    <div class="row-mt-5">
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Pick a research
            </button>
            <ul class="dropdown-menu bg-white border-0 " aria-labelledby="dropdownMenuButton1">
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res511"> Research on gender equality</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res521"> Proportions of
                        First-Generation
                        Female Students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res531"> Policy for
                        access
                        measures for students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res532"> Tracking
                        access
                        measures for employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res533"> Policy for women applications and entry</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res534"> Women's access schemes (Internal/External)</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res535"> Women's
                        application
                        in underrepresented subjects</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res541"> Proportion of senior female academics</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res551"> Proportion of female graduates</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res552"> Proportion of applicants
                        for graduation
                        to total number of graduates</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res553"> Number of graduates by broad subject areas</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res554"> Proportion of females graduates by broad subject areas</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res561"> Policy of non-discrimination against women</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res562"> Non-discrimination policies for transgender</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res563"> Maternity and paternity policies</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res564"> Leave priveleges of employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res565"> Solo parent</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res566"> Childcare facilities for students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res567"> Childcare facilities for staff and faculty</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res568"> Women's mentoring schemes</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res569"> Policies protecting those reporting discrimination</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5610"> Reports against discrimination</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res571"> GAD Focal Point System</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res572"> Committee on Decorum and Investigation CODI</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res573"> Reports against sexual harrasment</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res574"> VAW desk amd officer</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res575"> Reports on VAWC cases</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res576"> Statistics on abuse</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5761"> Students</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5762"> Employees</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res581"> GAD Plan and Budget</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res582"> GAD Accomplishment Report</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res591"> Capacity Development Sessions</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res592"> GAD Observances</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res593"> GAD IEC Materials</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res594"> Library Resources</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5101"> Courses integrated with gender perspective</button></li>
                <li class="text-center"><button class="btn btn-dark w-100 mb-2" id="res5111"> Extension PPAs integradted with gender perspective</button></li>

            </ul>
        </div>
        <div class=" bg-white border border-3 border-dark mt-5 w-100">
            <h2 class="text-center pt-3 mb-3">Add Research</h2>
            <div class="container" style=" height:auto;">
                <div class="d-flex w-100 h-auto">

                    <!--This div is for research 5.1.1-->
                    <div class="collapse w-100 h-auto" id="research511" style="display: block;">
                        <h2 class="text-center pb-5"> Research on gender equality</h2>
                        <form action="../../admin/sdg3/insert.php" method="post" name="form1">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the Research" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Year of Publication" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="Total Number of clinical citations" name="no_clinical">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.2.1-->
                    <div class=" w-100 h-auto" id="research521" style="display: none;">
                        <h2 class="text-center pb-4"> Proportions of First-Generation Female Students</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students strating a degree" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of first-generation students starting a degree" name="author">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.1-->
                    <div class=" w-100 h-auto" id="research531" style="display: none;">
                        <h2 class="text-center pb-4">Tracking access measures for students</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of college applicants" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of admitted college applicants" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of enrollees" name="year_pub">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.2-->
                    <div class=" w-100 h-auto" id="research532" style="display: none;">
                        <h2 class="text-center pb-4">Tracking access measures for employees</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of job applicants" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of newly-hired employees by the campus" name="author">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.3-->
                    <div class=" w-100 h-auto" id="research533" style="display: none;">
                        <h2 class="text-center pb-4">Policy for women applications and entry</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of women applications and entry policy" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="author">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.4-->
                    <div class=" w-100 h-auto" id="research534" style="display: none;">
                        <h2 class="text-center pb-4">Women's access schemes (Internal/External)</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of other PPAs exclusively for women" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Number of Internal PPAs" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Number of External PPAs" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Short description of the PPA" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_Clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_Citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.3.5-->
                    <div class=" w-100 h-auto" id="research535" style="display: none;">
                        <h2 class="text-center pb-4">Women's application in underrepresented subjects</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs t encourage women's application in underrepresented subjects" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.4.1-->
                    <div class=" w-100 h-auto" id="research541" style="display: none;">
                        <h2 class="text-center pb-4">Proportion of senior female academics</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of academic/teaching staff" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of senior academic staff" name="year_pub">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.5.1-->
                    <div class=" w-100 h-auto" id="research551" style="display: none;">
                        <h2 class="text-center pb-4">Proportion of female graduates</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates" name="title">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.5.2-->
                    <div class=" w-100 h-auto" id="research552" style="display: none;">
                        <h2 class="text-center pb-4">Proportion of applicants for graduation to total number of graduates</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of applicants for graduation" name="title">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.5.3-->
                    <div class=" w-100 h-auto" id="research553" style="display: none;">
                        <h2 class="text-center pb-4">Number of graduates by broad subject areas</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates in STEM" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates in Medicine" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of graduates in Arts and Humanities/Social Sciences" name="year_pub">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.5.4-->
                    <div class=" w-100 h-auto" id="research554" style="display: none;">
                        <h2 class="text-center pb-4">Proportion of females graduates by broad subject areas</h2>
                        <form action="" method="post">

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.1-->
                    <div class=" w-100 h-auto" id="research561" style="display: none;">
                        <h2 class="text-center pb-4">Policy of non-discrimination against women</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of non-discrimination against women policy" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in aacordance to the policy" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.2-->
                    <div class=" w-100 h-auto" id="research562" style="display: none;">
                        <h2 class="text-center pb-4">Non-discrimination policies for transgender</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of non-discrimination for transgender policy" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total Cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.3-->
                    <div class=" w-100 h-auto" id="research563" style="display: none;">
                        <h2 class="text-center pb-4">Maternity and paternity policies</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of maternity and paternity policy" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total Cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.4-->
                    <div class=" w-100 h-auto" id="research564" style="display: none;">
                        <h2 class="text-center pb-4">Leave priveleges of employees</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of paternity leave availed in the campus" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of maternity leave availed" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of maternity leave availed in the campus" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of maternity leave availed" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total number of solo parent leave availde in the campus" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of solo parent leave availed" name="solo_parents">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of 10-day VAWC leave availed in the campus" name="total_num">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of 10-day VAWC leave availed" name="total_equi">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of special leave benefits for women availed in the campus" name="no_special">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total equivalent amount of special leave benefits for women availed" name="equi_special">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.5-->
                    <div class=" w-100 h-auto" id="research565" style="display: none;">
                        <h2 class="text-center pb-4">Solo parent</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent employees" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent employees with solo parent" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent students" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of solo parent students with solo parent" name="no_clinical">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total number of employees who are children of solo parent" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who are children of solo parent" name="total_num">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.6-->
                    <div class=" w-100 h-auto" id="research566" style="display: none;">
                        <h2 class="text-center pb-4">Childcare facilities for students</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who use the childcare facility (monthly)" name="title">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.7-->
                    <div class=" w-100 h-auto" id="research567" style="display: none;">
                        <h2 class="text-center pb-4">Childcare facilities for staff and faculty</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of staff and faculty who use the childcare facility (monthly)" name="title">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.8-->
                    <div class=" w-100 h-auto" id="research568" style="display: none;">
                        <h2 class="text-center pb-4">Women's mentoring schemes</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of mentoring schemes for female students" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of mentoring schemes for female employees" name="total_num">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="title_ppa">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="short_description">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="total_cost">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Fund source" name="fund_source">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total number of female employees who participate in the mentoring schemes" name="total_employees">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.9-->
                    <div class=" w-100 h-auto" id="research569" style="display: none;">
                        <h2 class="text-center pb-4">Policies protecting those reporting discrimination</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of policy protecting reporting discrimination" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of PPAs implemented in accordance to the policy" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description of the PPA" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total Cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.6.10-->
                    <div class=" w-100 h-auto" id="research5610" style="display: none;">
                        <h2 class="text-center pb-4">Reports against discrimination</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of filed reports against discrimination" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of resolved discrimination cases" name="author">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.1-->
                    <div class=" w-100 h-auto" id="research571" style="display: none;">
                        <h2 class="text-center pb-4">GAD Focal Point System</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Level of Functionality based on the FAT" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Upload Memo of composition" name="author">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.2-->
                    <div class=" w-100 h-auto" id="research572" style="display: none;">
                        <h2 class="text-center pb-4">Committee on Decorum and Investigation CODI</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of activities conducted in the campus by CODI" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short description" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Fund Source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.3-->
                    <div class=" w-100 h-auto" id="research573" style="display: none;">
                        <h2 class="text-center pb-4">Reports against sexual harrasment</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of filed sexual harrassment cases" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of resolved sexual harrassment cases" name="author">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.4-->
                    <div class=" w-100 h-auto" id="research574" style="display: none;">
                        <h2 class="text-center pb-4">VAW desk amd officer</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="VAW Desk Officer" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Evidence" name="title">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.5-->
                    <div class=" w-100 h-auto" id="research575" style="display: none;">
                        <h2 class="text-center pb-4">Reports on VAWC cases</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of filed VAWC cases" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of resolve VAWC cases" name="author">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.6-->
                    <div class=" w-100 h-auto" id="research576" style="display: none;">
                        <h2 class="text-center pb-4">Statistics on abuse</h2>
                        <form action="" method="post">

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.6.1-->
                    <div class=" w-100 h-auto" id="research5761" style="display: none;">
                        <h2 class="text-center pb-4">Students</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who experience abuse from family members" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who experience abuse from former or current partner" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who experience abuse from other people" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of students who reported the abuse to the authorities" name="no_clinical">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total number of students who confide the abuse to trusted person" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.7.6.2-->
                    <div class=" w-100 h-auto" id="research5762" style="display: none;">
                        <h2 class="text-center pb-4">Employees</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who experience abuse from family members" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who experience abuse from former or current partner" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who experience abuse from other people" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of employees who reported abuse to the authorities" name="no_clinical">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total number of employees who confide the abuse to trusted person" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.8.1-->
                    <div class=" w-100 h-auto" id="research581" style="display: none;">
                        <h2 class="text-center pb-4">GAD Plan and Budget</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total campus GAA" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="5% of total GAA" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total GAD fund allotted in the GPB" name="year_pub">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.8.2-->
                    <div class=" w-100 h-auto" id="research582" style="display: none;">
                        <h2 class="text-center pb-4">GAD Accomplishment Report</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total GAD fund utilized" name="title">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.1-->
                    <div class=" w-100 h-auto" id="research591" style="display: none;">
                        <h2 class="text-center pb-4">Capacity Development Sessions</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of implemented CapDev sessions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of beneficiaries" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Title of the PPA" name="year_pub">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Short Description of the PPA" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Total Cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund Source" name="fund_source">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.2-->
                    <div class=" w-100 h-auto" id="research592" style="display: none;">
                        <h2 class="text-center pb-4">GAD Observances</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.3-->
                    <div class=" w-100 h-auto" id="research593" style="display: none;">
                        <h2 class="text-center pb-4">GAD IEC Materials</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.9.4-->
                    <div class=" w-100 h-auto" id="research594" style="display: none;">
                        <h2 class="text-center pb-4">Library Resources</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.10.1-->
                    <div class=" w-100 h-auto" id="research5101" style="display: none;">
                        <h2 class="text-center pb-4">Courses integrated with gender perspective</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                    <!--This div is for research 5.11.1-->
                    <div class=" w-100 h-auto" id="research5111" style="display: none;">
                        <h2 class="text-center pb-4">Extension PPAs integradted with gender perspective</h2>
                        <form action="" method="post">

                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of collaborations with health institutions" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of local collaborations" name="title">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of national collaborations" name="author">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of global collaborations" name="year_pub">
                            </div>
                            <p class="text-center lead">List of collaborations with health institutions</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Name of health institution" name="no_clinical">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Categorized as local, national, global" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Number of years in collaboration" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Title and description of collab project" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Total cost" name="no_citations">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" placeholder="Fund source" name="no_citations">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Add
                                    Research</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //button
    var btn_res1411 = document.getElementById("res1411");
    var btn_res1421 = document.getElementById("res1421");
    
    //div
    var div_res1411 = document.getElementById("research1411");
    var div_res1421 = document.getElementById("research1421");

    btn_res1411.addEventListener('click', () => {
        div_res1411.style.display = "block";
        div_res1421.style.display = "none";
    });

    btn_res1421.addEventListener('click', () => {
        div_res1411.style.display = "none";
        div_res1421.style.display = "block";
    });
</script>
