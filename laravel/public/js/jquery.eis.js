jQuery.fn.ForceNumericOnly =
    function()
    {
        return this.each(function()
        {
            $(this).keydown(function(e)
            {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
                return (
                    key == 8 || 
                    key == 9 ||
                    key == 46 ||
                    (key >= 37 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };

$(function(){
    $("#tax_income").ForceNumericOnly();
    $("#capital_gain").ForceNumericOnly();
    $("#invest").ForceNumericOnly();
});

function calculate() {
    
    //User inputs
    var tax_income = $('#tax_income').val();
    var capital_gain = $('#capital_gain').val();
    var invest = $('#invest').val();
    
    /*var difference = "-5";
    difference = Math.abs(difference);
    alert(difference);*/
    
    if(tax_income != "" && capital_gain != "" && invest != "") {

        //Assumptions for Tax Year 2012/13:
        var basic_rate_band_limit = $('#basic_rate_band_limit').val();
        var higher_rate_band_limit = $('#higher_rate_band_limit').val();
        var basic_rate = $('#basic_rate').val();
        var higher_rate = $('#higher_rate').val();
        var add_rate = $('#add_rate').val();
        var basic_rate_inc_tax_payer = $('#basic_rate_inc_tax_payer').val();
        var above_basic_rate_inc_tax_payer = $('#above_basic_rate_inc_tax_payer').val();
        var income_tax_allowance = $('#income_tax_allowance').val();
        var min_income_tax_allowance = $('#min_income_tax_allowance').val();
        var cgt_amt = $('#cgt_amt').val();
    
        //Calculations (not for displaying on the website):
        $('#taxable_income').val(Math.abs($('#tax_income').val()));
        var taxable_income = $('#taxable_income').val();
        //alert(taxable_income);
        
        $('#taxable_income_allowance').val((0 - $('#income_tax_allowance').val()));
        var taxable_income_allowance = $('#taxable_income_allowance').val();
        //alert(taxable_income_allowance);
    
        if(parseInt(taxable_income, 10) > parseInt(min_income_tax_allowance, 10)) {
            $('#red_income_tax_allowance1').val((0 - (taxable_income - min_income_tax_allowance) / 2));
        } else {
            $('#red_income_tax_allowance1').val(0);
        }
        var red_income_tax_allowance1 = $('#red_income_tax_allowance1').val();
        //alert(red_income_tax_allowance1);
    
        if(parseInt(red_income_tax_allowance1,10) < parseInt(taxable_income_allowance,10)) {
            $('#red_income_tax_allowance2').val(0 - taxable_income_allowance);
        } else {
            $('#red_income_tax_allowance2').val(0 - red_income_tax_allowance1);
        }
        var red_income_tax_allowance2 = $('#red_income_tax_allowance2').val();
        //alert(red_income_tax_allowance2);
    
        $('#taxable_income_after_income_tax_allowance').val(parseInt(taxable_income, 10) + parseInt(taxable_income_allowance, 10) + parseInt(red_income_tax_allowance2, 10));
        var taxable_income_after_income_tax_allowance = $('#taxable_income_after_income_tax_allowance').val();
        //alert(taxable_income_after_income_tax_allowance);
    
        if(parseInt(taxable_income_after_income_tax_allowance,10) > parseInt(basic_rate_band_limit,10)){
            var calc_val = ((parseInt(basic_rate_band_limit, 10) * parseInt(basic_rate, 10)) / 100);
        } else {
            var calc_val = ((parseInt(taxable_income_after_income_tax_allowance, 10) * parseInt(basic_rate, 10)) / 100);
        }
        if(parseInt(calc_val, 10) > 0){
        
            if(parseInt(taxable_income_after_income_tax_allowance,10) > parseInt(basic_rate_band_limit,10)){
                $('#basic_rate_band').val((parseInt(basic_rate_band_limit, 10) * parseInt(basic_rate, 10)) / 100);
            } else {
                $('#basic_rate_band').val((parseInt(taxable_income_after_income_tax_allowance, 10) * parseInt(basic_rate, 10)) / 100);
            }
        } else {
            $('#basic_rate_band').val(0);
        }
        var basic_rate_band = $('#basic_rate_band').val();
        //alert(basic_rate_band);
    
        if(parseInt(taxable_income_after_income_tax_allowance,10) > parseInt(higher_rate_band_limit,10)){
            var calc_val = ((parseInt(higher_rate_band_limit,10)- parseInt(basic_rate_band_limit, 10)) * parseInt(higher_rate, 10)) / 100;
        } else {
            var calc_val = ((parseInt(taxable_income_after_income_tax_allowance, 10) - parseInt(basic_rate_band_limit, 10)) * parseInt(higher_rate, 10)) / 100;
        }
        
        if(parseInt(calc_val, 10) > 0){
            if(parseInt(taxable_income_after_income_tax_allowance,10) > parseInt(higher_rate_band_limit,10)){
                $('#higher_rate_band').val(((parseInt(higher_rate_band_limit,10)- parseInt(basic_rate_band_limit, 10)) * parseInt(higher_rate, 10)) / 100);
            } else {
                $('#higher_rate_band').val(((parseInt(taxable_income_after_income_tax_allowance, 10) - parseInt(basic_rate_band_limit, 10)) * parseInt(higher_rate, 10)) / 100);
            }
        } else {
            $('#higher_rate_band').val(0);
        }
        var higher_rate_band = $('#higher_rate_band').val();
        //alert(higher_rate_band);
    
        if(parseInt(taxable_income_after_income_tax_allowance,10) > parseInt(higher_rate_band_limit,10)){
            $('#add_rate_band').val(((parseInt(taxable_income_after_income_tax_allowance, 10) - parseInt(higher_rate_band_limit, 10)) * parseInt(add_rate, 10)) / 100);
        } else {
            $('#add_rate_band').val(0);
        }
        var add_rate_band = $('#add_rate_band').val();
        //alert(add_rate_band);
    
        $('#income_tax_liability').val(parseInt(basic_rate_band, 10) + parseInt(higher_rate_band, 10) + parseInt(add_rate_band, 10));
        var income_tax_liability = $('#income_tax_liability').val();
        //alert(income_tax_liability);
    
        var max_seis_inv_allowance = $('#max_seis_inv_allowance').val();
        //alert(max_seis_inv_allowance);
    
        var seis_rate = $('#seis_rate').val();
        //alert(seis_rate);
    
        $('#max_seis_tax_relief_pos').val((Math.abs(parseInt(max_seis_inv_allowance, 10)) * parseInt(seis_rate, 10)) / 100);
        var max_seis_tax_relief_pos = $('#max_seis_tax_relief_pos').val();
        //alert(max_seis_tax_relief_pos);
    
        if(parseInt(income_tax_liability, 10) > parseInt(max_seis_tax_relief_pos, 10)){
            $('#max_seis_tax_relief_pos_avail').val(max_seis_tax_relief_pos);
        } else {
            $('#max_seis_tax_relief_pos_avail').val(income_tax_liability);
        }
        var max_seis_tax_relief_pos_avail = $('#max_seis_tax_relief_pos_avail').val();
        //alert(max_seis_tax_relief_pos_avail);
    
        $('#invest_max_seis_tax_relief').val(((Math.abs(parseInt(max_seis_tax_relief_pos_avail,10)) / parseInt(seis_rate, 10)) * 100).toFixed(0));
        var invest_max_seis_tax_relief = $('#invest_max_seis_tax_relief').val();
        //alert(invest_max_seis_tax_relief);
    
        if(parseInt(taxable_income_after_income_tax_allowance,10) < parseInt(basic_rate_band_limit,10)){
            $('#unused_basic_rate_band').val(parseInt(basic_rate_band_limit,10) - parseInt(taxable_income_after_income_tax_allowance,10));
        } else {
            $('#unused_basic_rate_band').val(0);
        }
        var unused_basic_rate_band = $('#unused_basic_rate_band').val();
        //alert(unused_basic_rate_band);
    
        if(parseInt(capital_gain, 10)> parseInt(unused_basic_rate_band, 10)){
            $('#basic_rate_band_capital_gain').val(unused_basic_rate_band);
        } else {
            $('#basic_rate_band_capital_gain').val(capital_gain);
        }
        var basic_rate_band_capital_gain = $('#basic_rate_band_capital_gain').val();
        //alert(basic_rate_band_capital_gain);
        
        if(parseInt(higher_rate_band,10) > 0){
            $('#capital_gain_tax_liability').val(((parseInt(capital_gain, 10) * parseInt(above_basic_rate_inc_tax_payer, 10)) / 100));
        } else {
            $('#capital_gain_tax_liability').val(((((parseInt(capital_gain, 10) - parseInt(basic_rate_band_capital_gain, 10)) * parseInt(above_basic_rate_inc_tax_payer, 10)) / 100) + ((parseInt(above_basic_rate_inc_tax_payer, 10) * parseInt(basic_rate_inc_tax_payer, 10)) / 100)));
        }
        var capital_gain_tax_liability = $('#capital_gain_tax_liability').val();
        //alert(capital_gain_tax_liability);
        
        if(((parseInt(max_seis_inv_allowance,10) * parseInt(above_basic_rate_inc_tax_payer, 10)) / 100) > 0){
            if(parseInt(capital_gain_tax_liability, 10) > ((parseInt(max_seis_inv_allowance, 10) * parseInt(above_basic_rate_inc_tax_payer, 10)) / 100)) {
                $('#seis_reinv_rel_cap').val((parseInt(max_seis_inv_allowance,10) * parseInt(above_basic_rate_inc_tax_payer, 10)) / 100);
            } else {
                $('#seis_reinv_rel_cap').val(capital_gain_tax_liability);
            }
        } else {
            $('#seis_reinv_rel_cap').val(0);
        }
        var seis_reinv_rel_cap = $('#seis_reinv_rel_cap').val();
        //alert(seis_reinv_rel_cap);
    
        if(parseInt(invest, 10) > parseInt(capital_gain, 10)){
            $('#seis_reinv_rel').val(seis_reinv_rel_cap);
        } else {
            $('#seis_reinv_rel').val((parseInt(invest, 10)/parseInt(capital_gain, 10)) * parseInt(seis_reinv_rel_cap, 10));
        }
        if(invest == ""){
            $('#seis_reinv_rel').val(0);
        }
        var seis_reinv_rel = $('#seis_reinv_rel').val();
        //alert(seis_reinv_rel);
    
        //Display Outputs
        if(parseInt(invest, 10) > parseInt(invest_max_seis_tax_relief, 10)){
            var output_1 = max_seis_tax_relief_pos_avail;
        } else {
            var output_1 = ((parseInt(invest, 10) * parseInt(seis_rate, 10))/100);
        }
        $('#output_1').val(output_1);
        
        var output_2 =  Math.abs(parseInt(invest, 10)) - parseInt(output_1, 10);
        $('#output_2').val(output_2);
        
        var output_3 = (parseInt(seis_reinv_rel, 10)/2);
        $('#output_3').val(output_3);
        
        var output_4 = Math.abs(parseInt(invest, 10)) - parseInt(output_1, 10) - parseInt(output_3, 10);
        $('#output_4').val(output_4);
        
        if(parseInt(output_4, 10) == 0){
            var output_5 = 0;
        } else {
            var output_5 = (Math.abs(parseInt(invest, 10)) / parseInt(output_4, 10)*100).toFixed(0);
        }
        $('#output_5').val(output_5);
        
        //Displaying Returns
        //1st row
        var returns_1_1 = invest;
        var returns_1_2 = invest;
        var returns_1_3 = invest;
        $('#returns_1_1').val(returns_1_1);
        $('#returns_1_2').val(returns_1_2);
        $('#returns_1_3').val(returns_1_3);
        //2nd row
        var returns_2_1 = $('#returns_2_1').val();
        var returns_2_2 = $('#returns_2_2').val();
        var returns_2_3 = $('#returns_2_3').val();
        //3rd row
        var returns_3_1 = ((parseInt(returns_1_1, 10) * returns_2_1) / 100);
        var returns_3_2 = ((parseInt(returns_1_2, 10) * returns_2_2) / 100);
        var returns_3_3 = ((parseInt(returns_1_3, 10) * returns_2_3) / 100);
        $('#returns_3_1').val(returns_3_1);
        $('#returns_3_2').val(returns_3_2);
        $('#returns_3_3').val(returns_3_3);
        //4th row
        var returns_4_1 = parseInt(returns_3_1, 10) - parseInt(output_4, 10);
        var returns_4_2 = parseInt(returns_3_2, 10) - parseInt(output_4, 10);
        var returns_4_3 = parseInt(returns_3_3, 10) - parseInt(output_4, 10);
        $('#returns_4_1').val(returns_4_1);
        $('#returns_4_2').val(returns_4_2);
        $('#returns_4_3').val(returns_4_3);
        //5th row
        if(parseInt(output_4, 10) == 0){
            var returns_5_1 = 0;
            var returns_5_2 = 0;
            var returns_5_3 = 0;
        } else {
            var returns_5_1 = ((Math.abs(((parseInt(invest, 10) * parseInt(returns_2_1, 10) / 100) / parseInt(output_4, 10))) - 1) * 100).toFixed(1);
            var returns_5_2 = ((Math.abs(((parseInt(invest, 10) * parseInt(returns_2_2, 10) / 100) / parseInt(output_4, 10))) - 1) * 100).toFixed(1);
            var returns_5_3 = ((Math.abs(((parseInt(invest, 10) * parseInt(returns_2_3, 10) / 100) / parseInt(output_4, 10))) - 1) * 100).toFixed(1);
        }
        $('#returns_5_1').val(returns_5_1);
        $('#returns_5_2').val(returns_5_2);
        $('#returns_5_3').val(returns_5_3);
        //6th row
        if(parseInt(output_4, 10) == 0){
            var returns_6_1 = 0;
            var returns_6_2 = 0;
            var returns_6_3 = 0;
        } else {
            var returns_6_1 = ((Math.pow(Math.abs(((parseInt(invest, 10) * parseInt(returns_2_1, 10) / 100)/parseInt(output_4))), (1/3)) - 1) * 100).toFixed(1);
            var returns_6_2 = ((Math.pow(Math.abs(((parseInt(invest, 10) * parseInt(returns_2_2, 10) / 100)/parseInt(output_4))), (1/3)) - 1) * 100).toFixed(1);
            var returns_6_3 = ((Math.pow(Math.abs(((parseInt(invest, 10) * parseInt(returns_2_3, 10) / 100)/parseInt(output_4))), (1/3)) - 1) * 100).toFixed(1);
        }
        $('#returns_6_1').val(returns_6_1);
        $('#returns_6_2').val(returns_6_2);
        $('#returns_6_3').val(returns_6_3);
        
    } else {
        
        $('#output_1').val(0);
        $('#output_2').val(0);
        $('#output_3').val(0);
        $('#output_4').val(0);
        $('#output_5').val(0);
        //Displaying Returns
        //1st row
        $('#returns_1_1').val(0);
        $('#returns_1_2').val(0);
        $('#returns_1_3').val(0);
        //2nd row fixed values
        //3rd row
        $('#returns_3_1').val(0);
        $('#returns_3_2').val(0);
        $('#returns_3_3').val(0);
        //4th row
        $('#returns_4_1').val(0);
        $('#returns_4_2').val(0);
        $('#returns_4_3').val(0);
        //5th row
        $('#returns_5_1').val(0);
        $('#returns_5_2').val(0);
        $('#returns_5_3').val(0);
        //6th row
        $('#returns_6_1').val(0);
        $('#returns_6_2').val(0);
        $('#returns_6_3').val(0);
    }
}

calculate();

