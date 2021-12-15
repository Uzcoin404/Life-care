                <?
                    $isLatest = $_GET['latest'];
                    $latestPatients = getPatients();
                    $sizePatients = sizeof($latestPatients);
                    $perPage = 10;
                    $listIndex = $_GET['list'];
                    $pages = ceil($sizePatients / $perPage);
                    $listIndex ? $list = $listIndex : $list = 1;
                    $firstList = ($list-1) * $perPage;
                    $patients = PatientsLimit($firstList, $perPage);
                    $id = $_GET['del'];
                    if ($id) {
                        $isOwner && $getOwner ? deleteAdmin($id) : deletePatient($id);
                        if ($isOwner && $getOwner) {
                            echo "<script>window.location.replace('../?route=dashboard&owner=1&page=bemor-royxat&admin-royxat=1')</script>";
                        } else{
                            echo "<script>window.location.replace('../?route=dashboard&page=bemor-royxat')</script>";
                        }
                    }
                ?>
                <div class="patient_main">
                    <div class="patient_header">
                        <h2 class="patient_title"><?= $isOwner && $getOwner ? "Adminlar Ro'yhati" : "Bemorlar Ro'yhati"?></h2>
                        <form action="../components/search.php" method="POST" class="search_form">
                            <div class="search_input">
                                <input class="search" type="search" name="search" placeholder="Passport seriya orqali izlang...">
                                <span class="search_icon"><i class="fas fa-search"></i></span>
                                <span class="search_cancel"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                    <div class="patient_body">
                        <div class="delete_submit">
                            <p class="submit_text">Chindan ham "<span>Falonchi</span>" Ma'lumotlarini butkul o'chirmoqchimisiz</p>
                            <a href="#" class="delete_submit_link">Ha</a>
                        </div>
                        <table class="patient_table">
                            <thead class="thead">
                                <tr class="patient_list_title">
                                <?if($isOwner && $getOwner):?>
                                    <th scope="col">ID</th>
                                    <th scope="col">Ismi</th>
                                    <th scope="col">Paroli</th>
                                    <th scope="col">Telefon raqami</th>
                                    <th scope="col">Rasmi</th>
                                    <th scope="col" class="controls_title">Tahrirlash</th>
                                    <th scope="col" class="controls_title">O'chirish</th>
                                <?else:?>
                                    <th scope="col">ID</th>
                                    <th scope="col">Ismi</th>
                                    <th scope="col">Familyasi</th>
                                    <th scope="col">Kasal turi</th>
                                    <th scope="col">Yoshi</th>
                                    <th scope="col">Pasport seriya</th>
                                    <th scope="col">Telefon raqami</th>
                                    <th scope="col" class="controls_title">Tahrirlash</th>
                                    <th scope="col" class="controls_title">O'chirish</th>
                                <?endif;?>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                            <?if($isOwner && $getOwner):
                                for ($i=0; $i < count($admins); $i++):?>
                                <tr class="patient_list">
                                        <th scope="row"><?= $admins[$i]['id']?></th>
                                        <td><a href="../?route=patient-info&owner=true&id=<?= $admins[$i]['id']?>"><?= $admins[$i]['login']?></a></td>
                                        <td><a href="../?route=patient-info&owner=true&id=<?= $admins[$i]['id']?>">********</a></td>
                                        <td><a href="../?route=patient-info&owner=true&id=<?= $admins[$i]['id']?>"><?= $admins[$i]['phone']?></a></td>
                                        <td><a href="../?route=patient-info&owner=true&id=<?= $admins[$i]['id']?>"><?= $admins[$i]['photo']?></a></td>
                                        <td class="table_btn edit_btn"><a href="../?route=add-admin&id=<?= $admins[$i]['id']?>"><i class="fas fa-edit"></i></a></td>
                                        <td class="table_btn delete_btn"><a href="../?route=dashboard&owner=1&page=bemor-royxat&del=<?= $admins[$i]['id']?>"><i class="fas fa-trash"></i></a></td>
                                    </tr>
                                </tbody>
                                <?endfor;
                            else:
                                if(!$isLatest):
                                    for ($i=0; $i < count($patients); $i++):?>
                                        <tr class="patient_list">
                                            <th scope="row"><?= $patients[$i]['id']?></th>
                                            <td><a href="../?route=patient-info&id=<?= $patients[$i]['id']?>"><?= $patients[$i]['name']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $patients[$i]['id']?>"><?= $patients[$i]['surname']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $patients[$i]['id']?>"><?= $patients[$i]['sicktype']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $patients[$i]['id']?>"><?= $patients[$i]['age']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $patients[$i]['id']?>"><?= $patients[$i]['passport']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $patients[$i]['id']?>"><?= $patients[$i]['number']?></a></td>
                                            <td class="table_btn edit_btn"><a href="../?route=add-patient&id=<?= $patients[$i]['id']?>"><i class="fas fa-edit"></i></a></td>
                                            <td class="table_btn delete_btn"><a href="../?route=dashboard&page=bemor-royxat&admin-royxat=1&del=<?= $patients[$i]['id']?>"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                    <?endfor;
                                else:
                                    for ($i=$sizePatients-1; $i >= $sizePatients-15; $i--):?>
                                        <tr class="patient_list">
                                            <th scope="row"><?= $latestPatients[$i]['id']?></th>
                                            <td><a href="../?route=patient-info&id=<?= $latestPatients[$i]['id']?>"><?= $latestPatients[$i]['name']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $latestPatients[$i]['id']?>"><?= $latestPatients[$i]['surname']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $latestPatients[$i]['id']?>"><?= $latestPatients[$i]['sicktype']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $latestPatients[$i]['id']?>"><?= $latestPatients[$i]['age']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $latestPatients[$i]['id']?>"><?= $latestPatients[$i]['passport']?></a></td>
                                            <td><a href="../?route=patient-info&id=<?= $latestPatients[$i]['id']?>"><?= $latestPatients[$i]['number']?></a></td>
                                            <td class="table_btn edit_btn"><a href="../?route=add-patient&id=<?= $latestPatients[$i]['id']?>"><i class="fas fa-edit"></i></a></td>
                                            <td class="table_btn delete_btn"><a href="../?route=dashboard&page=bemor-royxat&admin-royxat=1&del=<?= $latestPatients[$i]['id']?>"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                    <?endfor;
                                endif;
                            endif;?>
                        </table>
                    </div>
                <?if (!$getOwner && !$isLatest):?>
                    <div class="paginator">
                        <div class="pagination">
                            <ul>
                            <?if($listIndex-1 != 0):?>
                                <button><a href="../?route=dashboard&page=bemor-royxat&list=<?= $listIndex-1?>" class="btn prev"><i class="fas fa-angle-left"></i> Oldingi</a></button>
                            <?endif;?>
                            <?for ($list=1; $list <= $pages; $list++):?>
                                <a href="../?route=dashboard&page=bemor-royxat&list=<?= $list?>" class="numb <?= $listIndex == $list ? "active" : ""?>"><?= $list?></a>
                            <?endfor;?>
                            <?if($listIndex+1 <= $pages):?>
                                <button><a href="../?route=dashboard&page=bemor-royxat&list=<?= $listIndex+1?>" class="btn next">Keyingi <i class="fas fa-angle-right"></i></a></button>
                            <?endif;?>
                            </ul>
                        </div>
                    </div>
                <?endif;
                if(!$getOwner):?>
                    <div class="pagination_controls">
                        <a href="../?route=dashboard&page=bemor-royxat&list=1">Hammasini ko'rsatish</a>
                        <a href="../?route=dashboard&page=bemor-royxat&latest=true">Eng so'ngilarini ko'rsatish</a>
                    </div>
                <?endif;?>
                </div>
                <script>
                    const search = document.querySelector('.search'),
                        main = document.querySelector('main'),
                        table = document.querySelector('.patient_table'),
                        tr = document.querySelectorAll('tr'),
                        deleteBtn = document.querySelectorAll('.delete_btn'),
                        editBtn = document.querySelectorAll('.edit_btn'),
                        deleteSubmit = document.querySelector('.delete_submit'),
                        searchIcon = document.querySelector('.search_icon'),
                        searchForm = document.querySelector('.search_form'),
                        searchCancel = document.querySelector('.search_cancel');
                    
                    search.addEventListener('input',function(){
                        searchCancel.style.display = 'block';
                        if(this.value == ''){
                            searchCancel.style.display = 'none';
                        }
                    });
                    searchCancel.addEventListener('click', function(){
                        search.value = '';
                        this.style.display = 'none';
                    });
                    searchIcon.addEventListener('click', function(){
                        if (search.value.length >= 1) {
                            searchForm.submit();
                        }
                    });
                    let submitClassList = ['submit_text', 'delete_submit'];
                    function isSubmit(e) {
                        for (let i = 0; i < submitClassList.length; i++) {
                            if (e.classList.contains(submitClassList[i])) {
                                return true;
                            }                        
                        }
                    }
                    for (let i = 0; i < deleteBtn.length; i++) {
                        deleteBtn[i].querySelector('a').addEventListener('click', function(e){
                            e.preventDefault();
                        });
                    }
                    document.addEventListener('click', function(e){
                        for (let i = 0; i < deleteBtn.length; i++) { 
                            if (!isSubmit(e.target) && e.target != deleteBtn[i] && e.target != deleteBtn[i].querySelector('i')) {
                                deleteSubmit.classList.remove('active');
                            } else{
                                deleteSubmit.classList.add('active');
                                deleteSubmit.querySelector('a').href = deleteBtn[i].querySelector('a').href;
                                deleteSubmit.querySelector('span').innerHTML = tr[i+1].querySelector('td').querySelector('a').innerHTML;
                                break;
                                
                            }
                        }
                    });
                    for (let i = 0; i < editBtn.length; i++) {                        
                        editBtn[i].addEventListener('click', function(){
                            editBtn[i].querySelector('a').click();
                        });
                    }
                </script>