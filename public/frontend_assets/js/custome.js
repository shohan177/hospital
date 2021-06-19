        function datepicker(valu){

            // let days = ["1","2","3"]

            // .map((n) => parseInt(n))
            // .filter((n) => !isNaN(n));


            $( "#datepicker" ).datepicker({
                    minDate: 1,
                    maxDate: +3,
                    dateFormat: 'dd-mm-yy',

                    // beforeShowDay: function(day) {
                    //     return [days.includes(day.getDay())];
                    // }
                });

        }



        function getSelectValue()
        {
            let id = document.getElementById("departmentselection").value;


            $.ajax({
                url:'/drlist/'+id,
                dataType : 'html',
                success: function(data){
                    $('#Drselection').removeAttr('disabled');
                    $('#Drselection').html(data)
                }
            });

        };

        function getDrSelectValue()
        {
            let id = document.getElementById("Drselection").value;

            $.ajax({
                url:'/singledr/'+id,
                dataType : 'json',
                success: function(data){
                    $('#datepicker').removeAttr('disabled');
                    $('#typeselection').removeAttr('disabled');
                    $('#drvalu').val(data.name);
                    datepicker(data.working_days)



                }
            });

        };



