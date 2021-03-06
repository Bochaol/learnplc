<style>
	#m5_ex1_workspace{
		font: 150% "Trebuchet MS", sans-serif;
		text-align: center
	}


</style>

@extends('module.m5_template', array('submitStatus' => $submitstatus))

@section('title','Use timers!')

@section('section-menu')
@include('module.module5.menu')
@stop

@section('lesson')
<div class="lesson-title">Use timers!</div>
<div class="lesson-statement">
    <div class="subsection">
        <h4> 1. Use timer tools</h4>
        <p>
            To use timers and counters, we first expand the timers/counters tool panel.
            <br><img src="/public/assets/img/module5/intro/m5_tutorial_accordin.png" width="120"><br>
            In this section, you will learn 4 timer instructions: <b>TON,  TOF,  RTO,  RES.</b><br>
            <br>To use a timer, drag and drop an instruction onto the ladder logic.
            <br><img src="/public/assets/img/module5/intro/m5_tutorial_TON.png" width="230"><br><br>
        </p>
        <h4> 2. Setup timers</h4>
        <p>
            The base count interval is fixed 1 second. <br>
            To set Accum and Preset, just type in numbers in the input field. <br>
            <br><img src="/public/assets/img/module5/intro/m5_tutorial_ENDN.png" width="190"><br>
            To use the EN bit and DN bit of the timer, just drag and drop the EN and DN components onto other ladder logic elements<br><br>
        </p>
        <h4> 3. Use "RESET" instruction</h4>
        <p>
            To reset the ACCUM value of the timer, drag and drop an RES instruction onto ladder logic.<br>
            Then, you can drag and drop a DN or EN component onto the RES element, which links the RES element to that timer.<br>
            Whenever, the RES element gets activated, the linked timer will be reset.<br>
        </p>
    </div>

</div>
@stop

@section('instructions')
<div class="lesson-title">Exercise</div>
<div class="lesson-statement">
	<p>
        Play with the timer instructions. Try drag and drop different components.
	</p>
</div>
@stop

@section('exercise')
    <div id="plc_sim_container">

        <button id="UNDO" type="button" title="Undo the last changes">UNDO</button>

        <div id="simulator_window">
            <div id="ThreeJS" style="width:640px; height:360px"></div>
            <div id="ports_list">
                <h3>Inputs</h3>

                <div>
                    <div id="ins_sw1" class="port_inst" data-name="sw1">
                        <img src="/public/assets/icon/simulator/icon_swi.png" alt="some_text" width="32" height="32" class="icon_list">

                        <p style="margin-left: 5px;" class="inst_type">Switch #1:</p>

                        <p style="margin-left: 5px;" class="inst_name">SW1</p>
                    </div>
                    <div id="ins_sw2" class="port_inst" data-name="sw2">
                        <img src="/public/assets/icon/simulator/icon_swi.png" alt="some_text" width="32" height="32" class="icon_list">

                        <p style="margin-left: 5px;" class="inst_type">Switch #2:</p>

                        <p style="margin-left: 5px;" class="inst_name">SW2</p>
                    </div>
                    <div id="ins_bt1" class="port_inst" data-name="bt1">
                        <img src="/public/assets/icon/simulator/icon_button.png" alt="some_text" width="32" height="32" class="icon_list">

                        <p style="margin-left: 5px;" class="inst_type">Button #1:</p>

                        <p style="margin-left: 5px;" class="inst_name">BT1</p>
                    </div>
                </div>
                <h3>Outputs</h3>

                <div>
                    <div id="ins_lt1" class="port_inst" data-name="lt1">
                        <img src="/public/assets/icon/simulator/icon_light.png" alt="some_text" width="32" height="32" class="icon_list">

                        <p style="margin-left: 5px;" class="inst_type">Light #1:</p>

                        <p style="margin-left: 5px;" class="inst_name">LT1</p>
                    </div>
                    <div id="ins_lt2" class="port_inst" data-name="lt2">
                        <img src="/public/assets/icon/simulator/icon_light.png" alt="some_text" width="32" height="32" class="icon_list">

                        <p style="margin-left: 5px;" class="inst_type">Light #2:</p>

                        <p style="margin-left: 5px;" class="inst_name">LT2</p>
                    </div>
                </div>
            </div>
            <button id="simulate" type="button" title="Simulate the ladder logic">SIMULATE</button>
            <button id="stop_sim" type="button">STOP</button>
            <button id="fold_sim" type="button" title="Hide the simulation window to build the ladder logic">MINIMIZE</button>
            <button id="exp_sim" type="button" title="Reopen the simulation window for information">EXPAND</button>
            <div id="mark_item"></div>
        </div>

        <div id="toolaccord">
            <h3>Bit Tool</h3>
            <ul class="icons ui-widget ui-helper-clearfix">
                <li class="tool-container">
                    <div class="toolcom" data-element-type="1">
                        <img src="/public/assets/icon/simulator/XIO_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>
                <li class="tool-container">
                    <div class="toolcom" data-element-type="2">
                        <img src="/public/assets/icon/simulator/XIC_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>
                <li class="tool-container">
                    <div class="toolcom" data-element-type="3">
                        <img src="/public/assets/icon/simulator/OTE_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>
                <li class="tool-container">
                    <div class="toolcom" data-element-type="4">
                        <img src="/public/assets/icon/simulator/OTL_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>
                <li class="tool-container">
                    <div class="toolcom" data-element-type="5">
                        <img src="/public/assets/icon/simulator/OTU_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>
                <li class="tool-container">
                    <div class="toolcom" data-element-type="6">
                        <img src="/public/assets/icon/simulator/OSR_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>
                <li class="tool-container">
                    <div class="toolcom" data-element-type="7">
                        <img src="/public/assets/icon/simulator/ADD_Line.png" alt="some_text" width="32" height="32">
                    </div>
                </li>
                <li class="tool-container">
                    <div class="toolcom" data-element-type="8">
                        <img src="/public/assets/icon/simulator/Add_Bridge.png" alt="some_text" width="32" height="32">
                    </div>
                </li>


            </ul>
            <h3>Timers/Counters</h3>
            <ul class="icons ui-widget ui-helper-clearfix">
                <li class="tool-container">
                    <div class="toolcom" data-element-type="9">
                        <img src="/public/assets/icon/simulator/TON_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>

                <li class="tool-container">
                    <div class="toolcom" data-element-type="10">
                        <img src="/public/assets/icon/simulator/TOF_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>

                <li class="tool-container">
                    <div class="toolcom" data-element-type="11">
                        <img src="/public/assets/icon/simulator/RTO_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>

                <li class="tool-container">
                    <div class="toolcom" data-element-type="12">
                        <img src="/public/assets/icon/simulator/CTU_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>

                <li class="tool-container">
                    <div class="toolcom" data-element-type="13">
                        <img src="/public/assets/icon/simulator/CTD_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>

                <li class="tool-container">
                    <div class="toolcom" data-element-type="14">
                        <img src="/public/assets/icon/simulator/RES_tools.png" alt="some_text" width="32" height="32">
                    </div>
                </li>

            </ul>
            <h3>I/O</h3>
            <ul>For later module</ul>
            <h3>Compare</h3>
            <ul>For later module</ul>

        </div>

        <div id="LDLCanvas"></div>
        <script type="text/javascript" src="/public/assets/js/simulator/initiate.js"></script>
        <script type="text/javascript" src="/public/assets/js/simulator/scenario/light_switch.js"></script>

    </div>
@stop

@section('submit-class')
m5_ex1_submit
@stop

@section('additional_script')
    <script type="text/JAVASCRIPT">
        $(document).ready(function() {
            $('.radio').val('9999');
        });

        $(".m5_ex1_submit").hide();

        $("#trouble_btn").hide();
//        $("#trouble_btn").click(
//                function(){
//                    var question_dialog = $("<div></div>");
//                    question_dialog.dialog({
//                        height: 450,
//                        width: 600
//                    });
//
//                    //for hint block
//                    var hint_block = $("<div></div>");
//                    var hint_title = $("<h4>Hints:</h4>");
//                    hint_block.append(hint_title);
//
//                    var hint_body = $("<p>write <b>1</b> to the LT1 in output table turns on Light #1, " +
//                    "similar for Light #2" +
//                    "<br><br>The value that's being written to the output address is the value of current " +
//                    "value pointed by address in <b>FILE</b> *bitwise AND* the value of <b>MASK</b></p>");
//                    hint_block.append(hint_body);
//
//                    question_dialog.append(hint_block);
//
//                    //for solution button
//                    var show_solution = $("<button>Answer</button>").button().click(
//                            function(){
//                                var answer_dialog = $("<div></div>");
//                            }
//                    ).appendTo(question_dialog);
//                }
//        );


        $('.btn-radio').click(function() {
            $(this).parent().siblings().children().removeClass('active');
            $(this).addClass('active');
            $(this).parent().siblings('input').val($(this).attr('value'));
        });

    </script>
@stop