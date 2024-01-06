<?php include "../templates/templates.php"; 
        headertemplate('Subjects | Administrator'); ?>

  <body class="skin-green">
    <div class="wrapper">
      
     <?php navbar('subjects'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Subjects
          </h1>
        </section>

       <section class="content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List of Subjects</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-flat btn-primary"  data-toggle="tooltip" title="Add New Record" id="add"><i class="glyphicon glyphicon-plus"></i></button>
                 <button class="btn btn-flat btn-success"  data-toggle="tooltip" title="Edit Record" id="edit"><i class="glyphicon glyphicon-edit"></i></button>
                <button class="btn btn-flat btn-danger"  data-toggle="tooltip" title="Delete Record" id="delete"><i class="glyphicon glyphicon-remove"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="subjecttable" class="table table-bordered table-hover">
                <thead>
                  <th>Select</th>
                  <th>Subject Code</th>
                  <th>Description</th>
                  <th>Units</th>
                </thead>
                <tbody></tbody>
              </table>

            </div><!-- /.box-body -->
            
          </div><!-- /.box -->
       </section>   

             <div class="add-modal">
                  <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Add Subject</h4>
                        </div>
                        <div class="modal-body">

                          <div id="reqdesc" class="form-group">
                            <label class="control-label" for="inputSuccess">Subject Code<br><div ></div></label>
                            <input type="text" class="form-control" id="subjcode" placeholder="Input Subject Code" id="warning-desc" style="width:50%">
                          </div>
                           <div id="hasclass" class="form-group">
                            <label class="control-label" for="inputSuccess">Description<br><div id="validate-add-subject" ></div></label>
                            <input type="text" class="form-control" id="subjdesc" placeholder="Input Subject Description">
                          </div>
                          <div id="requnits" class="form-group">
                            <label class="control-label" for="inputSuccess">Units<br></label>
                            <input type="text" class="form-control" id="units" placeholder="Input Units" style="width:30%">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary pull-left disabled" data-toggle="tooltip" title="Save" id="save"><i class="glyphicon glyphicon-floppy-saved" ></i></button>               
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                </div><!-- /.example-modal -->

                <div class="edit-modal">
                  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Subject</h4>
                        </div>
                        <div class="modal-body">

                          <div id="reqdesc" class="form-group">
                            <label class="control-label" for="inputSuccess">Subject Code<br><div id="warning-desc-edit"></div></label>
                            <input type="text" class="form-control" name="editsubjcode" id="editsubjcode" style="width:50%">
                          </div>
                           <div id="hasclass-edit" class="form-group">
                            <label class="control-label" for="inputSuccess">Description<br><div id="validate-edit-subject" ></div></label>
                            <input type="text" class="form-control" name="editsubjdesc" id="editsubjdesc">
                            <input type="hidden" class="form-control" name="editsubjid" id="editsubjid">
                          </div>
                          <div  class="form-group">
                            <label class="control-label" for="inputSuccess">Units<br></label>
                            <input type="text" class="form-control" name="editunits" id="editunits" style="width:30%">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success pull-left" data-toggle="tooltip" title="Save Changes" id="save-changes"><i class="glyphicon glyphicon-floppy-saved" ></i></button>
                          <button type="button" class="btn btn-default pull-left" data-toggle="tooltip" title="Close" id="close"><i class="glyphicon glyphicon-remove" ></i></button>                              
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                </div><!-- /.example-modal -->
    
      </div><!-- /.content-wrapper -->

     <?php footertemplate();?>
     <script type="text/javascript">

      var table = $("#subjecttable").DataTable();

      $('#subjecttable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            
        }
        else {
            //table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        } );

      $(document).ready(function(){
        var datastring = 'action=load&tablename=subjects';

        $.ajax({
          type: "POST",
          data: datastring,
          url: "../php/crud.php",
          dataType: 'json',
          success: function(data){
            table.rows.add(data).draw();
          }
        });
        return false;
      });

      $("#add").click(function(){
        $("#add-modal").modal('show');
      });

      $("#subjcode, #subjdesc,#units ").keyup(function(){
        var code = $("#subjcode").val();
        var desc = $("#subjdesc").val();
        var units = $("#units").val();
        if(code!='' && desc!='' && units!=''){
           $("#save").removeClass("disabled");
        }
        else{
          $("#save").addClass("disabled");
        }
        return false;
      });

      $("#subjdesc").keyup(function(){
        var desc = $("#subjdesc").val();
        var datastring = 'action=validate&string='+desc+'&fieldname=subj_desc&tablename=subjects';
        if(desc==""){
          $("#hasclass").removeClass("has-success");
          $("#hasclass").removeClass("has-error");
          $("#validate-add-subject").html(' ');
        }
        else{

          $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
              if(result=="available"){
                $("#hasclass").addClass("has-success");
                $("#hasclass").removeClass("has-error");
                $("#validate-add-subject").html('<i class="glyphicon glyphicon-ok"></i> available');

              }
              else{
                $("#hasclass").addClass("has-error");
                $("#hasclass").removeClass("has-success");
                $("#validate-add-subject").html('<i class="glyphicon glyphicon-remove"></i> not available');
                $("#save").addClass("disabled");
              }
            }
          });

        }
        return false;
      });

      $("#save").click(function(){
        var code = $("#subjcode").val();
        var desc = $("#subjdesc").val();
        var units = $("#units").val();
        var datastring = 'action=add-subject&code='+code+'&desc='+desc+'&units='+units;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            var string = ['<input type="checkbox" name="subj_id" id="subj_id" value='+result+'>',code,desc,units];
            var rownode = table.row.add(string).draw().node();
            $(rownode).css('background-color','#00FF7F');
            $("#add-modal").modal('hide');
            document.getElementById('subjcode').value='';
            document.getElementById('subjdesc').value='';
            document.getElementById('units').value='';
            $("#save").addClass("disabled");
             $("#hasclass").removeClass("has-success");
            $("#validate-add-subject").html(' ');
          }
        });
        return false;
      });

      $("#edit").click(function(e){
        var id = $('#subj_id[type="checkbox"]:checked').val();
        var datastring = 'action=get-content&id='+id+'&tablename=subjects&fieldname=subj_id';
        if(id==null){
          alert("Select a subject");
        }
        else{
          $('#edit-modal').modal({
            backdrop: 'static',
            keyboard: false
          });

          $.ajax({
            type: "POST",
            url: "../php/crud.php",
            data: datastring,
            dataType: 'json',
            success: function(data){
              document.getElementById('editsubjid').value=data.subj_id;
              document.getElementById('editsubjcode').value=data.subj_code;
              document.getElementById('editsubjdesc').value=data.subj_desc;
               document.getElementById('editunits').value=data.units;
            }
          });
        }
        e.preventDefault();
      });

      $("#close").click(function(){
        $("#edit-modal").modal('hide');
        return false;
      });

      $("#editsubjcode, #editsubjdesc, #editunits").keyup(function(){
        var code = $("#editsubjcode").val();
        var desc = $("#editsubjdesc").val();
        var units = $("#editunits").val();
        var id = $("#editsubjid").val();

        if(code !='' && desc !='' && id !='' && units!=''){
          $("#save-changes").removeClass("disabled");

        }
        else{
          $("#save-changes").addClass("disabled");
        }
        return false;
      });

      $("#editsubjdesc").keyup(function(){
        var desc = $("#editsubjdesc").val();
        var id = $("#editsubjid").val();
        var datastring = 'action=validate-edit&string='+desc+'&id='+id+'&tablename=subjects&fieldnameid=subj_id&fieldname=subj_desc';

        if(desc==''){
          $("#hasclass-edit").removeClass("has-success");
          $("#hasclass-edit").removeClass("has-error");
          $("#validate-edit-subject").html(' ');
        }
        else{
          $.ajax({
          type: "POST",
          url:"../php/crud.php",
          data: datastring,
          success: function(result){
            if(result=="available"){
                $("#hasclass-edit").addClass("has-success");
                $("#hasclass-edit").removeClass("has-error");
                $("#validate-edit-subject").html('<i class="glyphicon glyphicon-ok"></i> available');

              }
              else{
                $("#hasclass-edit").addClass("has-error");
                $("#hasclass-edit").removeClass("has-success");
                $("#validate-edit-subject").html('<i class="glyphicon glyphicon-remove"></i> not available');
                $("#save-changes").addClass("disabled");
              }
          }
        });
        }
        return false;
      });

      $("#save-changes").click(function(e){
        var code = $("#editsubjcode").val();
        var desc = $("#editsubjdesc").val();
        var id = $("#editsubjid").val();
        var units = $("#editunits").val();
        var datastring = 'action=edit-subject&id='+id+'&code='+code+'&desc='+desc+'&units='+units;

        $.ajax({
          type: "POST",
          url: "../php/crud.php",
          data: datastring,
          success: function(result){
            if(result=="success"){
              table.row('.selected').remove().draw(false);
              var string = ['<input type="checkbox" name="subj_id" id="subj_id" value='+id+'>',code,desc,units];
              var rownode = table.row.add(string).draw(false).node();
               $(rownode).css('background-color','#00FF7F');
               $("#edit-modal").modal('hide');
            }
            else{
              alert("Error to update");
            }
          }
        });
        e.preventDefault();
      });

      $("#delete").click(function(){
        var id = $('#subj_id[type="checkbox"]:checked').map(function(){
                return this.value;
            }).get();
        var datastring = {'action':'delete','id':id,'fieldnameid':'subj_id','tablename':'subjects'};
        if(id==''){
          alert("Select at least one subject");
        }
        else{
          var con = confirm('Are you sure you want to delete this items(s)?');

          if(con==true){
            $.ajax({
            type: "POST",
            url: "../php/crud.php",
            data: datastring,
            success: function(result){
              if(result=="success"){
                table.rows('.selected').remove().draw(false);
              }
              else{
                alert("There's an error in deleting some items");
              }
            }
          });
          }
        }
          
        return false;
      });
     </script>
  </body>
</html>