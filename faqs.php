<?php
session_start();
include "config.php";
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Computer Support - FAQ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            /* background-image: url('https://wallpapers.com/images/high/pure-black-and-neon-blue-streaks-uyo6hd6unw57ynqi.webp'); */
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-color: white;
            opacity: 0.9;
            color: black;



        }
    </style>
</head>

<body style="background-color: #f1f1f1;">

    </style>
    </head>

    <body>

        <style>
            header {

                background-color: #f1f1f1;
                padding: 50px;
                /* background-image: url(data:image/jpeg;base64,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); */
            }

            a:hover {
                background-color: none;
                text-transform: uppercase;
                text-decoration: underline;



            }

            header a {
                text-decoration: none;
                color: #580202;
                font-size: 20px;
                font-weight: bolder;
                text-transform: uppercase;
                margin-right: 50px;


            }

            h1 {
                color: #150b;
                text-align: center;
            }

            h2 {
                color: #150ba0;
                margin-top: 30px;
            }

            ul {
                list-style-type: disc;
                padding-left: 20px;
                /* color: ; */
            }

            p {
                margin-bottom: 10px;
            }
        </style>
        </head>

        <body>
            <h1>Frequently Asked Questions</h1>

            <h2>1. How can I fix a slow computer?</h2>
            <p>To fix a slow computer, you can try the following:</p>
            <ul>
                <li>Close unnecessary programs and processes running in the background.</li>
                <li>Perform a disk cleanup to remove temporary files and free up space.</li>
                <li>Upgrade your hardware components, such as adding more RAM or replacing the hard drive with a solid-state drive (SSD).</li>
                <li>Scan your computer for malware and remove any infections.</li>
            </ul>

            <h2>2. How do I troubleshoot a blue screen error (BSOD)?</h2>
            <p>If you encounter a blue screen error, you can try these troubleshooting steps:</p>
            <ul>
                <li>Restart your computer and see if the error persists.</li>
                <li>Check for recently installed hardware or software and uninstall them if necessary.</li>
                <li>Update your device drivers to the latest version.</li>
                <li>Run a memory diagnostic tool to check for any issues with your RAM.</li>
                <li>If the problem persists, consider seeking professional help.</li>
            </ul>

            <h2>3. How can I recover deleted files?</h2>
            <p>If you have accidentally deleted files, you may be able to recover them using these methods:</p>
            <ul>
                <li>Check the recycle bin or trash folder to see if the files are still there.</li>
                <li>Use file recovery software, such as Recuva or TestDisk, to scan for and recover deleted files.</li>
                <li>Restore from a previous backup if you have one.</li>
            </ul>

            <h2>4. What should I do if my computer won't boot?</h2>
            <p>If your computer is not booting up, you can try these steps:</p>
            <ul>
                <li>Check if the power cable is securely connected and the power outlet is working.</li>
                <li>Make sure there are no loose connections inside the computer.</li>
                <li>Reset the BIOS settings to default.</li>
                <li>Try booting into safe mode or using the Windows recovery options.</li>
                <li>If nothing works, consider contacting a computer technician.</li>
            </ul>

            <h2>5. How do I remove a virus from my computer?</h2>
            <p>To remove a virus from your computer, you can follow these steps:</p>
            <ul>
                <li>Update your antivirus software and perform a full system scan.</li>
                <li>If your antivirus software cannot remove the virus, try using a specialized malware removal tool.</li>
                <li>Disconnect your computer from the network to prevent the virus from spreading.</li>
                <li>If the virus is persistent, consider seeking professional assistance.</li>
            </ul>
        </body>
        <?php
        include 'footer.php';
        ?>


</html>