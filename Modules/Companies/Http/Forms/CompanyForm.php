<?php

namespace Modules\Companies\Http\Forms;


use Kris\LaravelFormBuilder\Form;

use Modules\Platform\Core\Helper\FormHelper;
use Modules\Companies\Entities\CompanyType;
                                                                use Modules\Companies\Entities\CompanyIndustry;
                                                                use Modules\Companies\Entities\CompanyRating;
                                                                                                                                                                                                                                                    
    

    

    

    



class CompanyForm extends Form
{
    public function buildForm()
    {

        $this->add('name', 'text', [
                    'label' => trans('companies::companies.form.name'),
                    ]);

                
            
                
                    $this->add('owned_by', 'select', [
                    'choices' => FormHelper::assignedToChoises(),
                    'attr' => ['class' => 'select2 pmd-select2 form-control'],
                    'label' => trans('core::core.form.assigned_to'),
                    'empty_value' => trans('core::core.empty_select'),
                    'selected' => FormHelper::assignSelectedFromModel($this->model)
                    ]);

                
            
                
                    $this->add('employees', 'text', [
                    'label' => trans('companies::companies.form.employees'),
                    ]);

                
            
                
                    $this->add('company_type_id', 'select', [
                    'choices' => CompanyType::all()->pluck('name','id')->toArray(),
                    'attr' => ['class' => 'select2 pmd-select2 form-control'],
                    'label' => trans('companies::companies.form.company_type_id'),
                    'empty_value' => trans('core::core.empty_select')
                    ]);

                
            
                
                    $this->add('company_industry_id', 'select', [
                    'choices' => CompanyIndustry::all()->pluck('name','id')->toArray(),
                    'attr' => ['class' => 'select2 pmd-select2 form-control'],
                    'label' => trans('companies::companies.form.company_industry_id'),
                    'empty_value' => trans('core::core.empty_select')
                    ]);

                
            
                
                    $this->add('company_rating_id', 'select', [
                    'choices' => CompanyRating::all()->pluck('name','id')->toArray(),
                    'attr' => ['class' => 'select2 pmd-select2 form-control'],
                    'label' => trans('companies::companies.form.company_rating_id'),
                    'empty_value' => trans('core::core.empty_select')
                    ]);

                
                                
                
                    $this->add('street', 'text', [
                    'label' => trans('companies::companies.form.street'),
                    ]);

                
            
                
                    $this->add('city', 'text', [
                    'label' => trans('companies::companies.form.city'),
                    ]);

                
            
                
                    $this->add('state', 'text', [
                    'label' => trans('companies::companies.form.state'),
                    ]);

                
            
                
                    $this->add('country', 'text', [
                    'label' => trans('companies::companies.form.country'),
                    ]);

                
            
                
                    $this->add('zip_code', 'text', [
                    'label' => trans('companies::companies.form.zip_code'),
                    ]);

                
                                
                
                    $this->add('notes', 'textarea', [
                    'label' => trans('companies::companies.form.notes'),
                    ]);
                
                    
    

    

    

    



        $this->add('submit', 'submit', [
            'label' => trans('core::core.form.save'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);

    }

}