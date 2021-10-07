<?php

class ACFUtil {

  // helper functions for creating custom fields
  public static function setFieldGroup($key, $title, $type, array $fields): array {
    $hash = gHash(array($key, $title, $type));
    return array(
      'key'   => $key . $hash,
      'title' => $title,
      'fields' => $fields,
      'location' => array(
        array(
          array(
            'param' => 'post_type',
            'operator' => '==',
            'value' => $type,
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => true,
      'description' => '',
    );
  }

  public static function setFlexibleContent($key, $label, $name, $buttonLabel, array $subFields, $layout = 'block', $conditionalLogic = 0): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label'  => $label,
      'name'   => $name,
      'type'   => 'flexible_content',
      'layouts' => $subFields,
      'button_label' => $buttonLabel,
      'conditional_logic' => $conditionalLogic,
    );
  }

  public static function setLayout($key, $label, $name, array $subFields, $layout = 'block'): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label'      => $label,
      'name'       => $name,
      'display'    => $layout,
      'sub_fields' => $subFields,
    );
  }

  public static function setText($key, $label, $name, $required = true, $conditionalLogic = 0): array {
    $hash = gHash(array($key, $label, $name));
    return [
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'text',
      'required' => $required,
      'conditional_logic' => $conditionalLogic,
    ];
  }

  public static function setWysiwyg($key, $label, $name, $required = true): array {
    $hash = gHash(array($key, $label, $name));
    return [
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'wysiwyg',
      'required' => $required,
    ];
  }

  public static function setCheckbox($key, $label, $name, array $choices): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'     => $key . $hash,
      'label'   => $label,
      'name'    => $name,
      'type'    => 'checkbox',
      'choices' => $choices,
    );
  }

  public static function setTab($key, $label): array {
    $hash = gHash(array($key, $label));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'type'  => 'tab',
    );
  }

  public static function setGroup($key, $label, $name, array $subFields, $layout = 'block', $conditionalLogic = 0): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'               => $key . $hash,
      'label'             => $label,
      'name'              => $name,
      'type'              => 'group',
      'sub_fields'        => $subFields,
      'layout'            => $layout,
      'conditional_logic' => $conditionalLogic
    );
  }

  public static function setRepeater($key, $label, $name, array $subFields, $buttonLabel = 'Add row', $layout = 'block'): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label'      => $label,
      'name'       => $name,
      'type'       => 'repeater',
      'sub_fields' => $subFields,
      'layout'     => $layout,
      'button_label' => $buttonLabel,
    );
  }

  public static function setGallery($key, $label, $name, $max = null, $required = true): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'gallery',
      'required' => $required,
      'max' => $max,
      'min' => $max,
    );
  }
  
  public static function setNumber($key, $label, $name, $required = true, $value = 0 ): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'number',
      'required' => $required,
      'default_value' => $value
    );
  }
  
  public static function setTextarea($key, $label, $name, $required = true): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'textarea',
      'required' => $required,
    );
  }

  public static function setColorPicker($key, $label, $name, $required = true): array {
    $hash = ACFUtil::gHash([$key, $label, $name]);
    return [
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'color_picker',
      'required' => $required,
    ];
  }

  public static function setImage($key, $label, $name, $required = true): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'image',
      'required' => $required
    );
  }

  public static function setLink($key, $label, $name): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'link',
    );
  }
  
  public static function setFile($key, $label, $name): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'file',
    );
  }
  
  public static function setToggle($key, $label, $name): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'true_false',
    );
  }
  
  public static function setDate($key, $label, $name): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'date_picker',
    );
  }
  
  
  public static function setPost($key, $label, $name, $required = true, $type = 'page'): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'post_object',
      'return_format' => 'ID',
      'post_type' => [ $type ],
      'required' => $required,
  
    );
  }
  
  public static function setColor($key , $label, $name, $isText = false): array {
    $hash = gHash(array($key, $label, $name));
    return array(
      'key'   => $key . $hash,
      'label' => $label,
      'name'  => $name,
      'type'  => 'color_picker',
      'default_value' => $isText ? '#0a0a0a' : '#ffffff'
    );
  }

  public static function setDropdown($key, $label, $name, array $choices): array {
    return array(
      'key'     => $key,
      'label'   => $label,
      'name'    => $name,
      'type'    => 'select',
      'choices' => $choices,
    );
  }

  public static function setPostObject($key, $label, $name, $postType, $required = true, $returnFormat = 'id') {
    return [
      'key' => $key,
      'label' => $label,
      'name' => $name,
      'type' => 'post_object',
      'instructions' => '',
      'required' => $required,
      'conditional_logic' => 0,
      'post_type' => [
        0 => $postType,
      ],
      'multiple' => 0,
      'return_format' => $returnFormat,
    ];
  }

  public static function conditionalLogic($field, $operator, $value): array {
    return [[[
      'field' => $field,
      'operator' => $operator,
      'value' => $value,
    ]]];
  }

  private static function gHash(array $data): string {
    return '_' . md5(serialize($data));
  }
}
