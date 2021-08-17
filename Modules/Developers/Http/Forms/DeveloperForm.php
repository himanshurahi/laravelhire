<?php

namespace Modules\Developers\Http\Forms;


use Kris\LaravelFormBuilder\Form;

use Modules\Platform\Core\Helper\FormHelper;


class DeveloperForm extends Form
{
    public function buildForm()
    {

        $this->add('first_name', 'text', [
                    'label' => trans('developers::developers.form.first_name'),
                    ]);

                
            
                
                    $this->add('last_name', 'text', [
                    'label' => trans('developers::developers.form.last_name'),
                    ]);

                
            
                
                    $this->add('phone_number', 'text', [
                    'label' => trans('developers::developers.form.phone_number'),
                    ]);

                
            
                
                
            
                
                    $this->add('rate', 'text', [
                    'label' => trans('developers::developers.form.rate'),
                    ]);

                
            
                
                    $this->add('about', 'text', [
                    'label' => trans('developers::developers.form.about'),
                    ]);

                
            
                
                    $this->add('profile_picture', 'textarea', [
                    'label' => trans('developers::developers.form.profile_picture'),
                    ]);
                
            
                
                    $this->add('portfolio_links', 'text', [
                    'label' => trans('developers::developers.form.portfolio_links'),
                    ]);

                
            
                
                    $this->add('portfolio_images', 'text', [
                    'label' => trans('developers::developers.form.portfolio_images'),
                    ]);

                
            
                
                    $this->add('skills', 'text', [
                    'label' => trans('developers::developers.form.skills'),
                    ]);

                
                    
    



        $this->add('submit', 'submit', [
            'label' => trans('core::core.form.save'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);

    }

}