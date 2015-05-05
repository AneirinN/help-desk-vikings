<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
         Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>AT&T Pebble Beach Jr. Golf Association - Summer Golf Lesson Series 2015</title>

    <meta name="description" content="">
    <meta name="author" content="Help-Desk-Vikings">

    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">


    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- calendar stuff -->
    <link rel="stylesheet" type="text/css" href="calendar/calendar-blue2.css" />
    <script type="text/javascript" src="calendar/calendar.js"></script>
    <script type="text/javascript" src="calendar/calendar-en.js"></script>
    <script type="text/javascript" src="calendar/calendar-setup.js"></script>
    <!-- END calendar stuff -->

    <script src="js/signups.js"></script>

</head>

<body onLoad="collapseAll()">

    <div id="mainForm">

        <div id="formHeader">
                <h2 class="formInfo">HDV</h2>
                <p class="formInfo">AT&T Golf Signups</p>
        </div>


        <br/><!-- begin form -->
        <form method=post enctype=multipart/form-data action=processor.php onSubmit="return validatePage2();">
            <ul class=mainForm id="mainForm_1">

                <li class="mainForm" id="fieldBox_1">
                    <label class="formFieldQuestion">First Name</label>
                    <input class=mainForm type=text name=field_1 id=field_1 size='25' value='' required></li>

                <li class="mainForm" id="fieldBox_2">
                    <label class="formFieldQuestion">Last Name&nbsp;*</label>
                    <input class=mainForm type=text name=field_2 id=field_2 size='25' value='' required></li>

                <li class="mainForm" id="fieldBox_3">
                    <label class="formFieldQuestion">Gender&nbsp;*</label>
                    <span><input class=mainForm type=checkbox name=field_3[] id=field_3_option_1 value="M" />
                        <label class=formFieldOption for="field_3_option_1">M</label>
                        <input class=mainForm type=checkbox name=field_3[] id=field_3_option_2 value="F" />
                        <label class=formFieldOption for="field_3_option_2">F</label></span></li>

                <li class="mainForm" id="fieldBox_4">
                    <label class="formFieldQuestion"></label>
                    <span><input class=mainForm type=checkbox name=field_4[] id=field_4_option_1 value="Right" />
                        <label class=formFieldOption for="field_4_option_1">Right</label>
                        <input class=mainForm type=checkbox name=field_4[] id=field_4_option_2 value="Left" />
                        <label class=formFieldOption for="field_4_option_2">Left</label></span></li>

                <li class="mainForm" id="fieldBox_5">
                    <label class="formFieldQuestion">Height (inches)&nbsp;*</label>
                    <input class=mainForm type=text name=field_5 id=field_5 size='5' value=''></li>

                <li class="mainForm" id="fieldBox_6">
                    <label class="formFieldQuestion">
                        Emergency Contact&nbsp;*&nbsp;<a class=info href=#><img src=imgs/tip_small.png border=0><span class=infobox>Relationship?</span></a>
                    </label>
                    <input class=mainForm type=text name=field_6 id=field_6 size='50' value=''></li>

                <li class="mainForm" id="fieldBox_7">
                    <label class="formFieldQuestion">Date of Birth&nbsp;*</label>
                    <input type=text  name=field_7 id=field_7 value=""><button type=reset class=calendarStyle id=fieldDateTrigger_7></button>
                    <script>   Calendar.setup({
                                inputField     :    "field_7",
                                ifFormat       :    "%m/%d/%Y",
                                showsTime      :    false,
                                button         :    "fieldDateTrigger_7",
                                singleClick    :    true,
                                step           :    1
                                });
                    </script>
                </li>

                <li class="mainForm" id="fieldBox_8">
                    <label class="formFieldQuestion">
                        Address:&nbsp;*&nbsp;<a class=info href=#><img src=img/tip_small.png border=0><span class=infobox>Please enter your address</span></a>
                    </label>
                    <input class=mainForm type=text name=field_8 id=field_8 size='50' value=''>
                </li>

                <li class="mainForm" id="fieldBox_9">
                    <label class="formFieldQuestion">City&nbsp;*</label>
                    <input class=mainForm type=text name=field_9 id=field_9 size='25' value=''>
                </li>

                <li class="mainForm" id="fieldBox_10">
                    <label class="formFieldQuestion">State&nbsp;*</label>
                    <select class=mainForm name=field_10 id=field_10>
                        <option value=''> </option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option>
                    </SELECT>
                </li>

                <li class="mainForm" id="fieldBox_11">
                    <label class="formFieldQuestion">Zip&nbsp;*</label>
                    <input class=mainForm type=text name=field_11 id=field_11 size='10' value=''>
                </li>
                
                <li class="mainForm" id="fieldBox_12">
                    <label class="formFieldQuestion">Email&nbsp;*&nbsp;<a class=info href=#><img src=img/tip_small.png border=0><span class=infobox>Email</span></a></label>
                    <input class=mainForm type=email name=field_12 id=field_12 size=50 value="" style="background-image:url(img/email.png); background-repeat: no-repeat;  padding: 2px 2px 2px 25px;">
                </li>

                <li class="mainForm" id="fieldBox_13">
                    <label class="formFieldQuestion">Phone (Home)&nbsp;*</label>
                    <input class=mainForm type=text name=field_13 id=field_13 size='20' value=''>
                </li>

                <li class="mainForm" id="fieldBox_14">
                    <label class="formFieldQuestion">Phone (Cell)&nbsp;*</label>
                    <input class=mainForm type=text name=field_14 id=field_14 size='20' value=''>
                </li>

                <li class="mainForm" id="fieldBox_15">
                    <label class="formFieldQuestion">Parent/Guardian&nbsp;*</label>
                    <input class=mainForm type=text name=field_15 id=field_15 size='50' value=''>
                </li>

                <li class="mainForm" id="fieldBox_16">
                    <label class="formFieldQuestion">Status&nbsp;*</label>
                    <select class=mainForm name=field_16 id=field_16>
                        <option value=''></option><option value="Beginner">Beginner</option><option value="Intermediate">Intermediate</option><option value="Advanced">Advanced</option>
                    </select>
                </li>

                <li class="mainForm" id="fieldBox_17">
                    <label class="formFieldQuestion">
                        Skills Evaluation&nbsp;*&nbsp;<a class=info href=#><img src=img/tip_small.png border=0><span class=infobox> SKILLS EVALUATION:  If golfer has taken a skills evaluation, please indicate level</span></a>
                    </label><span>
                    <input class=mainForm type=radio name=field_17 id=field_17_option_1 value="Copper" /><label class=formFieldOption for="field_17_option_1">Copper</label>
                    <input class=mainForm type=radio name=field_17 id=field_17_option_2 value="Bronze" /><label class=formFieldOption for="field_17_option_2">Bronze</label>
                    <input class=mainForm type=radio name=field_17 id=field_17_option_3 value="Silver" /><label class=formFieldOption for="field_17_option_3">Silver</label>
                    <input class=mainForm type=radio name=field_17 id=field_17_option_4 value="Gold" /><label class=formFieldOption for="field_17_option_4">Gold</label>
                    <input class=mainForm type=radio name=field_17 id=field_17_option_5 value="Platinum" /><label class=formFieldOption for="field_17_option_5">Platinum</label></span>
                </li>

                <li class="mainForm" id="fieldBox_18">
                    <label class="formFieldQuestion">
                        Own clubs?&nbsp;<a class=info href=#><img src=img/tip_small.png border=0><span class=infobox>Do you own your own clubs?</span></a>
                    </label>
                    <span><input class=mainForm type=checkbox name=field_18[] id=field_18_option_1 value="Yes" /><label class=formFieldOption for="field_18_option_1">Yes</label></span>
                </li>


            <!-- end of this page -->

                <!-- page validation -->
                <script>
                <!--
		function checkLesson()
                    {
                        $query = " SELECT date, location FROM Lesson WHERE lessonID = field_20"; 
                        $result = mysql_query($query); 
                        $.ajax({
                            type: "get",
                            url: "./checklesson.php",
                            dataType: "json",
                            data: {"studentCount": $("#field_20").val() },
                            success: function(data,status) {
                            // alert(data['exists']);
                            if (studentCount < 5) {
                                $("#checkVacancy").html("Lesson Slot Available");
                                $("#checkVacancy").css("color", "green")
                            } else {
                                $("#checkVacancy").html("Lesson Full");
                                $("#field_20").css("background-color", "red");
                                $("#field_20").focus();
                                $("#checkVacancy").css("color", "red");
                            }
                        },
                            complete: function(data,status) { //optional, used for debugging purposes
                            // alert(status);
                        }
                    });
                    }
                    function validatePage1() {
                        var retVal = true;

                        if (validateField('field_1','fieldBox_1','text',0) == false)
                            retVal=false;
                        if (validateField('field_2','fieldBox_2','text',1) == false)
                            retVal=false;
                        if (validateField('field_3','fieldBox_3','checkbox',1) == false)
                            retVal=false;
                        if (validateField('field_4','fieldBox_4','checkbox',0) == false)
                            retVal=false;
                        if (validateField('field_5','fieldBox_5','text',1) == false)
                            retVal=false;
                        if (validateField('field_6','fieldBox_6','text',1) == false)
                            retVal=false;
                        if (validateDate('field_7','fieldBox_7','date',1,'05/03/2000','05/03/2015') == false)
                            retVal=false;
                        if (validateField('field_8','fieldBox_8','text',1) == false)
                            retVal=false;
                        if (validateField('field_9','fieldBox_9','text',1) == false)
                            retVal=false;
                        if (validateField('field_10','fieldBox_10','state',1) == false)
                            retVal=false;
                        if (validateField('field_11','fieldBox_11','text',1) == false)
                            retVal=false;
                        if (validateField('field_12','fieldBox_12','email',1) == false)
                            retVal=false;
                        if (validateField('field_13','fieldBox_13','text',1) == false)
                            retVal=false;
                        if (validateField('field_14','fieldBox_14','text',1) == false)
                            retVal=false;
                        if (validateField('field_15','fieldBox_15','text',1) == false)
                            retVal=false;
                        if (validateField('field_16','fieldBox_16','menu',1) == false)
                            retVal=false;
                        if (validateField('field_17','fieldBox_17','radio',1) == false)
                            retVal=false;
                        if (validateField('field_18','fieldBox_18','checkbox',0) == false)
                            retVal=false;

                        if(retVal == false) {
                            alert('Please correct the errors.  Fields marked with an asterisk (*) are required');
                            return false;
                        }
                        return retVal;
                    }
                //-->
                </script>
                <!-- end page validaton -->



                <!-- next page buttons -->
                <li class="mainForm">
                        <input type=button onclick="if (validatePage1()) { collapseElem('mainForm_1'); expandElem('mainForm_2');}" class="mainForm" value="Go to page 2"/>
                </li>
                <!-- close the display stuff for this page -->
            </ul>

            <ul class=mainForm id="mainForm_2">
                <li class="mainForm" id="fieldBox_20">
                    <label class="formFieldQuestion">Choose a lesson&nbsp;*</label>
                    <select class=mainForm name=field_20 id=field_20>
                        <option value=''></option><option value="lesson 1">lesson 1</option><option value="lesson 2">lesson 2</option>
                    </select>
                </li>
                <!-- end of this page -->

                <!-- page validation -->
                <script>
                <!--
                    function validatePage2() {
                        var retVal = true;
                        if (validateField('field_20','fieldBox_20','menu',1) == false) {
                            retVal = false;
                        }

                        if(retVal == false) {
                            alert('Please correct the errors.  Fields marked with an asterisk (*) are required');
                            return false;
                        }
                        return retVal;
                    }
                //-->
                </script>
                <!-- end page validaton -->

                <!-- next page buttons -->
                <li class="mainForm">
                    <label class="formFieldQuestion">
                        Type the following:&nbsp;<a class=info href=#><img src=img/tip_small.png border=0>
                        <span class=infobox>For security purposes, please type the letters in the image.</span></a><BR>
                        <img src="not_used/CaptchaSecurityImages.php" />
                    </label>

                    <input id="captchaForm" name="security_code" class="mainForm" type="text"/>
                </li>

                <li class="mainForm">
                        <input id="saveForm" class="mainForm" type="submit" value="Submit" />
                </li>
            </ul>
        </form>
            <!-- end of form -->
        <!-- close the display stuff for this page -->

    </div>


    <div id="footer">
        <p class="footer"> &copy; Copyright  by Help-Desk-Vikings, CSUMB </p>
    </div>

    <!--Created with the aid of phpFormGenerator, http://phpformgen.sourceforge.net-->
</body>
</html>
