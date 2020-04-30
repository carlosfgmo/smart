
<!-- CREATE TASK MODAL -->
<!-- Modal -->
<div class="modal fade" id="modal-task">

    <div class="modal-dialog">
        <div class="modal-content bg-white">
            <!-- Modal body -->
            <div class="modal-body padding-none ">

                <form class="form-horizontal " role="form">

                        <div class="innerLR innerT">
                            <div class="form-group">
                                <label for="to" class="col-sm-2 control-label">Task:</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="to">
                                        <div class="input-group-btn">
                                            <button type="button" data-toggle="collapse" data-target="#cc" class="btn btn-default">Schedule <span class="caret"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="cc" class="collapse">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Starts:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker2">
    <input class="form-control" type="text" value="14 February 2013" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ends:</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date datepicker2">
    <input class="form-control" type="text" value="14 February 2013" />
    <span class="input-group-addon"><i class="fa fa-th"></i></span>
</div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Milestone:</label>
                                <div class="col-sm-6">
                                    <select class="selectpicker">
                                        <option>HTML Validation</option>
                                        <option>User Interface Design</option>
                                        <option>Update Bootstrap 3.2</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Project:</label>
                                <div class="col-sm-6">
                                    <select class="selectpicker">
                                        <option>Project #1</option>
                                        <option>Project #2</option>
                                        <option>Project #3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                    <div class="innerAll bg-white">
                        <textarea class="notebook border-none form-control padding-none" rows="4" placeholder="Task description..."></textarea>
                        <div class="clearfix"></div>
                    </div>
                </form>

            </div>
            <!-- // Modal body END -->

            <div class="innerLR innerB text-right">
                <a href="" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
                <a href="" class="btn btn-primary"><i class="fa  fa-check"></i> Submit</a>
            </div>

        </div>
    </div>

</div>
<!-- // Modal END -->




<!-- // END MODAL -->

		
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase SMART on ThemeForest</a> - Current version: v1.0.0-rc1 / <a target="_blank" href="../assets/../../CHANGELOG.txt?v=v1.0.0-rc1">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	

    <!-- Global -->
    <script data-id="App.Config">
        var App = {};        var basePath = 'admin/',
            commonPath = '../assets/',
            rootPath = '../',
            DEV = true,
            componentsPath = '../assets/components/';

        var primaryColor = '#c72a25',
            dangerColor = '#b55151',
            successColor = '#609450',
            infoColor = '#4a8bc2',
            warningColor = '#ab7a4b',
            inverseColor = '#45484d';

        var themerPrimaryColor = primaryColor;

            </script>

    <?php 
foreach ($scripts as $id => $script)
{
	$sections = !empty($script['sections']) && !empty($script['sections'][$page]);
	$inPages = in_array($page, $script['pages']);
	$inSections = !$sections ? false : in_array($section, $script['sections'][$page]);

	if (!$script['header'] && ((!$sections && $inPages) || ($sections && $inSections)))
		echo '<script src="' . $script['file'] . '"></script>' . "\n\t";
} 
?>

</body>
</html>