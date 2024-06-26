<div class="container">
    <h1>Home</h1>
    <h3>You are in the View: application/view/home/index.php (everything in this box comes from that file)</h3>
  

    <!-- main content output -->
    <div class="box">
        <h3>Amount of tasks (data from second model)</h3>
        <div>
            <?php //echo $amount_of_tasks; ?>
        </div>
        <h3>Amount of tasks (via AJAX)</h3>
        <div>
            <button id="javascript-ajax-button">Click here to get the amount of tasks via Ajax (will be displayed in #javascript-ajax-result-box)</button>
            <div id="javascript-ajax-result-box"></div>
        </div>
        <h3>List of tasks (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td width=200>Task title</td>
                <td width=250>Task description</td>
                <td>Started On</td>
                <td>Ending On</td>
                <td>Assigned To</td>
                <td>Assigned By</td>
                <td>Status</td>
                <td>DELETE</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tasks as $task) { 
                
                
                
                ?>
                
                
                <tr>
         
                    <td><?php if (isset($task->id)) echo htmlspecialchars($task->id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($task->title)) echo htmlspecialchars($task->title, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($task->description)) echo htmlspecialchars($task->description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($task->started_time)) echo htmlspecialchars(formatLanguage(date_create($task->started_time), 'd/m/Y à H:i:s','fr'), ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($task->due_date)) echo htmlspecialchars(formatLanguage(date_create($task->due_date), 'd/m/Y à H:i:s','fr'), ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($task->assigned_to_name)) echo htmlspecialchars($task->assigned_to_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($task->task_giver_name)) echo htmlspecialchars($task->task_giver_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($task->status_name)) echo htmlspecialchars($task->status_name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'tasks/delete-task/' . htmlspecialchars($task->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
                    <td><a href="<?php echo URL . 'tasks/edit-task/' . htmlspecialchars($task->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php 
            
             //echo date('d-m-Y H:i:s', strtotime($task->started_time)); 
        
              } 
            
            
            ?>
            </tbody>
        </table>
    </div>
</div>
