<?php 

//Traits

/**
 *  
 */
trait TuitionFee
{
    public function totalPay()
    {
        return "N34,500/year";
    }
}

/**
 *  
 */
trait HostelFee
{
    public function totalAmount()
    {
        return "N21,800/year";
    }

    public function securityLevy()
    {
        return "N1,500/month";
    }
}
