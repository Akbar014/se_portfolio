<table class="table table-condensed table-bordered">
    <thead>
        <tr>
            <td>Budget</td>
            <td>Paid</td>
            <td>Due</td>
            <td>Start</td>
            <td>End</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><span class="badge badge-info"><?php echo $project['Project']['price']; ?></span></td>
            <td><span class="badge badge-info"><?php echo $project['Project']['paid']; ?></span></td>
            <td><span class="badge badge-info"><?php echo ($project['Project']['price'] - $project['Project']['paid']); ?></span></td>
            <td><span class="badge badge-info"><?php echo $project['Project']['start_date']; ?></span></td>
            <td><span class="badge badge-info"><?php echo $project['Project']['end_date']; ?></span></td>
        </tr>
    </tbody>
</table>