package com.example.demo.contorllers;

import java.util.Collections;
import java.util.Map;

import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping(path = "api")
public class APIGetController {
    @RequestMapping(value = "/get", method = RequestMethod.GET)
    public Map<String, String> _apiGet(ModelMap modelMap) {
        return Collections.singletonMap("key", "value");
    }
}
