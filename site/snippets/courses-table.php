<?php 

    $coursesField = $page->blueprint()->field('courses'); 
    $structure = $page->courses()->toStructure(); 

    $filter = get('filter'); 

    if($filter == 'allcourses')
    {
        $structure = $page->courses()->toStructure(); 
    }
    else if($filter == 'firstyear') 
    {
            $structure = $structure->filter(function($course) use($filter) 
            {
                return $course->year()->value() === 'First year';
            });
    }
    else if($filter == 'secondyear') 
    {
            $structure = $structure->filter(function($course) use($filter) 
            {
                return $course->year()->value() === 'Second year';
            });
    }
    else if($filter == 'thirdyear') 
    {
            $structure = $structure->filter(function($course) use($filter) 
            {
                return $course->year()->value() === 'Third year';
            });
    }

?>

<div class="courses">
    <div class="margin">
        <div class="banner">
            <p class="primary-title"><?= $page->title() ?></p>

            <div class="titles">
                <p class="secondary-title">First year</p>
                <p class="secondary-title">Second year</p>
                <p class="secondary-title">Third year</p>
            </div>
            <div class="filter-btns">
                <form method="GET">
                    <button class="filter-btn" name="filter" value="allcourses">All courses</button>
                    <button class="filter-btn" name="filter" value="firstyear">First Year</button>
                    <button class="filter-btn" name="filter" value="secondyear">Second Year</button>
                    <button class="filter-btn" name="filter" value="thirdyear">Third Year</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="courses-table">

        <table>
            <thead>
                <tr>
                    <?php foreach($coursesField['fields'] as $fieldName): ?>
                        <th><?= $fieldName['label'] ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($structure as $course): ?>
                    <tr>
                        <td><?= $course->subject() ?></td>
                        <td><?= $course->studyPoints() ?></td>
                        <td><?= $course->year() ?></td>
                        <td><?= $course->profile() ?></td>
                        <td><?= $course->period() ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>