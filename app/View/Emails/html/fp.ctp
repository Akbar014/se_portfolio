<div style="background: #e5e5e5;padding: 20px; text-align: center;font-family: Lucida Sans Unicode;">
    <table style="padding: 10px;width: 500px;margin: 0 auto;text-align: left;vertical-align: top;">
        <tr><td colspan="2"><div></div></td></tr>
        <tr>
            <td><b>Name:</b></td><td> <?php echo $data['contact']['name']; ?></td>
        </tr>
        <tr>
            <td><b>Phone:</b></td><td> <?php echo $data['contact']['phone']; ?></td>
        </tr>
        <tr>
            <td><b>Email:</b></td><td> <?php echo $data['contact']['email']; ?></td>
        </tr>
        <tr>
            <td><b>Subject:</b></td><td> <?php echo $data['contact']['subject']; ?></td>
        </tr>
        <tr>
            <td><b>Message:</b> </td><td><?php echo $data['contact']['massage']; ?></td>
        </tr>
    </table>
    <br/>
    <hr/>
    <br/>
    <p>All rights reserved by: <a href="http://www.softwareend.com" target="_blank" style="padding: 0 3px;">Software End</a> &copy; <?php echo date('Y'); ?></p>
</div>