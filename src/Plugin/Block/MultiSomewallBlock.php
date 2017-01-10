<?php

namespace Drupal\multi_somewall\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'MultiSomewallBlock' block.
 *
 * @Block(
 *  id = "multi_somewall_block",
 *  admin_label = @Translation("Somewall block"),
 * )
 */
class MultiSomewallBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['fbf'] = array(
      '#type' => 'fieldset',
      '#title' => t('Facebook feed'),
      '#weight' => '1',
    );
    $form['fbf']['facebook_account'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Facebook account'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['facebook_account']) ? $this->configuration['facebook_account'] : '@wroxbox',
      '#maxlength' => 255,
      '#size' => 128,
      '#weight' => '0',
    );
    $form['fbf']['facebook_limit'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Facebook limit'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['facebook_limit']) ? $this->configuration['facebook_limit'] : '20',
      '#maxlength' => 5,
      '#size' => 5,
      '#weight' => '0',
    );
    $form['fbf']['facebook_access_token'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Facebook access token'),
      '#description' => $this->t('String: "APP_ID|APP_SECRET"'),
      '#default_value' => isset($this->configuration['facebook_access_token']) ? $this->configuration['facebook_access_token'] : '',
      '#maxlength' => 255,
      '#size' => 128,
      '#weight' => '0',
    );
    $form['twf'] = array(
      '#type' => 'fieldset',
      '#title' => t('Twitter feed'),
      '#weight' => '2',
    );
    $form['twf']['twitter_account'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Twitter account'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['twitter_account']) ? $this->configuration['twitter_account'] : '@wroxbox, #wroxbox',
      '#maxlength' => 255,
      '#size' => 128,
      '#weight' => '0',
    );
    $form['twf']['twitter_limit'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Twitter limit'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['twitter_limit']) ? $this->configuration['twitter_limit'] : '20',
      '#maxlength' => 5,
      '#size' => 5,
      '#weight' => '0',
    );
    $form['twf']['twitter_consumer_key'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Twitter consumer key'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['twitter_consumer_key']) ? $this->configuration['twitter_consumer_key'] : '',
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['twf']['twitter_consumer_secret'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Twitter consumer secret'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['twitter_consumer_secret']) ? $this->configuration['twitter_consumer_secret'] : '',
      '#maxlength' => 128,
      '#size' => 128,
      '#weight' => '0',
    );
    $form['igf'] = array(
      '#type' => 'fieldset',
      '#title' => t('Instagram feed'),
      '#weight' => '3',
    );
    $form['igf']['instagram_account'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Instagram account'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['instagram_account']) ? $this->configuration['instagram_account'] : '&wroxbox',
      '#maxlength' => 255,
      '#size' => 128,
      '#weight' => '0',
    );

    $form['igf']['instagram_limit'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Instagram limit'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['instagram_limit']) ? $this->configuration['instagram_limit'] : '20',
      '#maxlength' => 5,
      '#size' => 5,
      '#weight' => '0',
    );
    $form['igf']['instagram_client_id'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Instagram client ID'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['instagram_client_id']) ? $this->configuration['instagram_client_id'] : '',
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );
    $form['igf']['instagram_user_id'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Instagram user ID'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['instagram_user_id']) ? $this->configuration['instagram_user_id'] : '',
      '#maxlength' => 255,
      '#size' => 128,
      '#weight' => '0',
    );
    $form['igf']['instagram_access_token'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Instagram access token'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['instagram_access_token']) ? $this->configuration['instagram_access_token'] : '',
      '#maxlength' => 255,
      '#size' => 128,
      '#weight' => '0',
    );
    $form['rssf'] = array(
      '#type' => 'fieldset',
      '#title' => t('RSS feed'),
      '#weight' => '4',
    );
    $form['rssf']['rss_urls'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('RSS'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['rss_urls']) ? $this->configuration['rss_urls'] : '',
      '#maxlength' => 255,
      '#size' => 128,
      '#weight' => '0',
    );
    $form['rssf']['rss_limit'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('RSS limit'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['rss_limit']) ? $this->configuration['rss_limit'] : '20',
      '#maxlength' => 5,
      '#size' => 5,
      '#weight' => '0',
    );
    $form['length'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Length'),
      '#description' => $this->t('How long text to show in feed?'),
      '#default_value' => isset($this->configuration['length']) ? $this->configuration['length'] : '200',
      '#maxlength' => 5,
      '#size' => 5,
      '#weight' => '9',
    );
    $form['show_media'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Show media'),
      '#description' => $this->t(''),
      '#default_value' => isset($this->configuration['show_media']) ? $this->configuration['show_media'] : '0',
      '#weight' => '10',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    //print_r($form_state->getValues());
    $this->configuration['facebook_account'] = $form_state->getValue(['fbf', 'facebook_account']);
    $this->configuration['facebook_limit'] = $form_state->getValue(['fbf', 'facebook_limit']);
    $this->configuration['facebook_access_token'] = $form_state->getValue(['fbf', 'facebook_access_token']);
    $this->configuration['twitter_account'] = $form_state->getValue(['twf', 'twitter_account']);
    $this->configuration['twitter_limit'] = $form_state->getValue(['twf', 'twitter_limit']);
    $this->configuration['twitter_consumer_key'] = $form_state->getValue(['twf', 'twitter_consumer_key']);
    $this->configuration['twitter_consumer_secret'] = $form_state->getValue(['twf', 'twitter_consumer_secret']);
    $this->configuration['instagram_account'] = $form_state->getValue(['igf', 'instagram_account']);
    $this->configuration['instagram_limit'] = $form_state->getValue(['igf', 'instagram_limit']);
    $this->configuration['instagram_client_id'] = $form_state->getValue(['igf', 'instagram_client_id']);
    $this->configuration['instagram_user_id'] = $form_state->getValue(['igf', 'instagram_user_id']);
    $this->configuration['instagram_access_token'] = $form_state->getValue(['igf', 'instagram_access_token']);
    $this->configuration['rss_urls'] = $form_state->getValue(['rssf', 'rss_urls']);
    $this->configuration['rss_limit'] = $form_state->getValue(['rssf', 'rss_limit']);

    $this->configuration['length'] = $form_state->getValue('length');
    $this->configuration['show_media'] = $form_state->getValue('show_media');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $content = [];
    $content['fb_accounts'] = '';
    $content['facebook_accounts'] = '';
    $content['twitter_acc'] = '';
    $content['twitter_accounts'] = '';
    $content['insta_acc'] = '';
    $content['instagram_accounts'] = '';
    $content['rss_feeds'] = '';
    $content['rss_url'] = '';
    /**
     * Handle multiple facebook accounts
     */
    $content['fb_accounts'] = explode(',',$this->configuration['facebook_account']);
    foreach($content['fb_accounts'] as $values) {
      $content['facebook_accounts'] .=  "'" .trim($values). "',";
    }
    $content['facebook_accounts'] = rtrim($content['facebook_accounts'], ",");

    /**
     * Handle multiple twitter accounts and/or hashtags
     */
    $content['twitter_acc'] = explode(',',$this->configuration['twitter_account']);
    foreach($content['twitter_acc'] as $values) {
      $content['twitter_accounts'] .=  "'" .trim($values). "',";
    }
    $content['twitter_accounts'] = rtrim($content['twitter_accounts'], ",");

    /**
     * Handle multiple instagram accounts and/or hashtags
     */
    $content['insta_acc'] = explode(',',$this->configuration['instagram_account']);
    foreach($content['insta_acc'] as $values) {
      $content['instagram_accounts'] .=  "'" .trim($values). "',";
    }
    $content['instagram_accounts'] = rtrim($content['instagram_accounts'], ",");

    /**
     * Handle multiple rss feeds
     */
    $content['rss_feeds'] = explode(',',$this->configuration['rss_urls']);
    foreach($content['rss_feeds'] as $values) {
      $content['rss_url'] .=  "'" .trim($values). "',";
    }
    $content['rss_url'] = rtrim($content['rss_url'], ",");


    $conf =  $this->configuration;
    foreach($conf as $key => $value) {
      $content[$key] = $value;

    }
    //dump($content);
    return array(
      '#theme' => 'multi_somewall',
      '#content' => $content,
      '#attached' => array(
        'library' =>  array(
          'multi_somewall/socialfeed'
        ),
      ),
    );

  }

}
