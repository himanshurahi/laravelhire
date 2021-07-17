<?php

namespace Modules\AdminJobs\Http\Forms;


use Kris\LaravelFormBuilder\Form;

use Modules\Platform\Core\Helper\FormHelper;


class AdminJobForm extends Form
{
    public function buildForm()
    {

        $this->add('job_title', 'text', [
                    'label' => trans('adminjobs::adminjobs.form.job_title'),
                    ]);

                
            
                
                    $this->add('job_description', 'text', [
                    'label' => trans('adminjobs::adminjobs.form.job_description'),
                    ]);

                
            
                
                    $this->add('skills', 'text', [
                    'label' => trans('adminjobs::adminjobs.form.skills'),
                    ]);

                
            
                
                    $this->add('job_duration', 'number', [
                    'label' => trans('adminjobs::adminjobs.form.job_duration'),
                    ]);
                
            
                
                    $this->add('budget', 'text', [
                    'label' => trans('adminjobs::adminjobs.form.budget'),
                    ]);

                
            
                
                    $this->add('attachment', 'text', [
                    'label' => trans('adminjobs::adminjobs.form.attachment'),
                    ]);

                
                    
    



        $this->add('submit', 'submit', [
            'label' => trans('core::core.form.save'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);

    }

}