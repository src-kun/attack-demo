
# 使用含有已知漏洞的组件

标签： lib

---

## 简介
&#8194;&#8194;&#8194;&#8194;这种安全漏洞普遍存在。基于组件开发的模式使得多数开发团队根本不了解其应用或API中使用的组件，更谈不上及时更新这些组件了。虽然对于一些已知的漏洞其影响很小，但目前很多严重的安全事件都是利用组件中的已知漏洞。根据所要保护的资产，此类风险等级可能会很高。

## 检测
&#8194;&#8194;&#8194;&#8194;利用如 [versions](http://www.mojohaus.org/versions-maven-plugin/)、[DependencyCheck](https://www.owasp.org/index.php/OWASP_Dependency_Check) 、[retire.js](https://github.com/retirejs/retire.js/)等工具来持续的记录客户端和服务器端以及它们的依赖库的版本信息。持续监控如[CVE](https://cve.mitre.org/)和[NVD](https://nvd.nist.gov)等是否发布已使用组件的漏洞信息，可以使用软件分析工具来自动完成此功能。订阅关于使用组件安全漏洞的警告邮件。

## 防范
- 仅从官方渠道安全的获取组件，并使用签名机制来降低组件被篡改或加入恶意漏洞的风险。
- 监控那些不再维护或者不发布安全补丁的库和组件。如果不能打补丁，可以考虑部署虚拟补丁来监控、检测或保护。

## 攻击

`TODO`

## 参考：
- [versions](http://www.mojohaus.org/versions-maven-plugin/)
- [DependencyCheck](https://www.owasp.org/index.php/OWASP_Dependency_Check)
- [retire.js](https://github.com/retirejs/retire.js/)
- [CVE](https://cve.mitre.org/)
- [NVD](https://nvd.nist.gov)
