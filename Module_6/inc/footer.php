 </section>
<section class="footeroption">
 	
</section>
</div>

<!-- JS Code -->
<script>
    let sectiontask1 = document.querySelector('#section-task1');
    let sectiontask2 = document.querySelector('#section-task2');
    let sectiontask3 = document.querySelector('#section-task3');
    let sectiontask4 = document.querySelector('#section-task4');

    function loadTask1(){
        sectiontask1.style.display = "block";
        sectiontask2.style.display = "none";
        sectiontask3.style.display = "none";
        sectiontask4.style.display = "none";
    }
    
    function loadTask2(){
        sectiontask2.style.display = "block";
        sectiontask1.style.display = "none";
        sectiontask3.style.display = "none";
        sectiontask4.style.display = "none";
    }

    function loadTask3(){
        sectiontask3.style.display = "block";
        sectiontask1.style.display = "none";
        sectiontask2.style.display = "none";
        sectiontask4.style.display = "none";
    }

    function loadTask4(){
        sectiontask4.style.display = "block";
        sectiontask1.style.display = "none";
        sectiontask2.style.display = "none";
        sectiontask3.style.display = "none";
    }
</script>
</body>
</html>