<?php
namespace Themosis\Page;

class Option
{
    /**
     * Utility method to retrieve an option saved using the Page class.
     * Give the 'option_group' name and the option 'name' defined by the developer.
     *
     * @param string $optionGroup The section name.
     * @param $name $name The option name.
     * @throws OptionException
     * @return mixed The option value.
     */
    public static function get($optionGroup, $name = null)
    {
        $option = get_option($optionGroup);

        if (!empty($option))
        {
            if (!is_null($name))
            {
                if(array_key_exists($name, $option)) {
                  return $option[$name];                   
                } else {
                  return '';
                }

            }

            return $option;
        }

        return '';

    }
}
