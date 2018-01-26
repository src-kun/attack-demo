
# 跨站请求伪造

标签： csrf xsrf

---

## 简介
&#8194;&#8194;&#8194;&#8194;CSRF（Cross-site request forgery）跨站请求伪造，也被称为“One Click Attack”或者Session Riding，通常缩写为CSRF或者XSRF，是一种对网站的恶意利用。尽管听起来像跨站脚本（XSS），但它与XSS非常不同，XSS利用站点内的信任用户，而CSRF则通过伪装来自受信任用户的请求来利用受信任的网站。与XSS攻击相比，CSRF攻击往往不大流行（因此对其进行防范的资源也相当稀少）和难以防范，所以被认为比XSS更具危险性。

&#8194;&#8194;&#8194;&#8194;攻击者盗用了你的身份，以你的名义发送恶意请求，对服务器来说这个请求是完全合法的，但是却完成了攻击者所期望的一个操作，比如以你的名义发送邮件、发消息，盗取你的账号，添加系统管理员，甚至于购买商品、虚拟货币转账等。 如下：其中Web A为存在CSRF漏洞的网站，Web B为攻击者构建的恶意网站，User C为Web A网站的合法用户。

## 检测
&#8194;&#8194;&#8194;&#8194;检测CSRF漏洞是一项比较繁琐的工作，最简单的方法就是抓取一个正常请求的数据包，删除referer后提交该请求还有效，基本可以确定存在CSRF漏洞。

## 防范
- **验证 HTTP Referer 字段**   [参考](https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)_Prevention_Cheat_Sheet#General_Recommendations_For_Automated_CSRF_Defense)
- **在请求中添加 token 并验证**  [参考](https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)_Prevention_Cheat_Sheet#CSRF_Specific_Defense)




## 攻击

将test.html和cstf文件放到同一目录，访问test.html完成攻击。

[test.html 攻击脚本](https://test)

[csrf.html payload](https://test)


## 参考：
- [Add tweet to collection CSRF](https://hackerone.com/reports/100820)
- [百度百科](https://baike.baidu.com/item/CSRF/2735433?fr=aladdin)
- [owasp](https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)_Prevention_Cheat_Sheet)
