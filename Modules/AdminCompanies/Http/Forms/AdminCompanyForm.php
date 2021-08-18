<?php

namespace Modules\AdminCompanies\Http\Forms;


use Kris\LaravelFormBuilder\Form;

use Modules\Platform\Core\Helper\FormHelper;


class AdminCompanyForm extends Form
{
    public function buildForm()
    {

        $this->add('company_name', 'text', [
                    'label' => trans('admincompanies::admincompanies.form.company_name'),
                    ]);

                
            
                
                    $this->add('company_email', 'text', [
                    'label' => trans('admincompanies::admincompanies.form.company_email'),
                    ]);

                
            
                
                    $this->add('company_details', 'textarea', [
                    'label' => trans('admincompanies::admincompanies.form.company_details'),
                    ]);
                
                    
    



        $this->add('submit', 'submit', [
            'label' => trans('core::core.form.save'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);

    }

}