<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.admin' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint.php';

return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->load(__DIR__.'/getSecurity_ChannelListenerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.context_listener.0']) ? $this->services['security.context_listener.0'] : $this->load(__DIR__.'/getSecurity_ContextListener_0Service.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['security.authentication.listener.basic.admin']) ? $this->services['security.authentication.listener.basic.admin'] : $this->load(__DIR__.'/getSecurity_Authentication_Listener_Basic_AdminService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->load(__DIR__.'/getSecurity_AccessListenerService.php')) && false ?: '_'};
}, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load(__DIR__.'/getSecurity_HttpUtilsService.php')) && false ?: '_'}, 'admin', ${($_ = isset($this->services['security.authentication.basic_entry_point.admin']) ? $this->services['security.authentication.basic_entry_point.admin'] : $this->services['security.authentication.basic_entry_point.admin'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area')) && false ?: '_'}, NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load(__DIR__.'/getMonolog_Logger_SecurityService.php')) && false ?: '_'}, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', 'security.request_matcher.z8xqmvs', true, false, 'security.user.provider.concrete.in_memory', 'admin', 'security.authentication.basic_entry_point.admin', NULL, NULL, array(0 => 'http_basic'), NULL));
