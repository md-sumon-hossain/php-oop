<?php

# INHERITING CONSTRUCTOR:

# Rule 1:
    # If base has constructor and sub class has no constructor, after creating the instance of the inherited class the base class constructor will be called.

# Rule-2:
    # If base has constructor and sub class has also constructor, after creating the instance of the inherited class the sub class constructor will be called. because the base class constructor will be overriden by the sub class constructor

# Rule-3:
    # If base has constructor and sub class has also constructor, after creating the instance of the inherited class the sub class constructor will be called. because the base class constructor will be overriden by the sub class constructor. but if we wnat to call the base class constructor also we need to use the "parent::__ConstructorName" inside the sub class constructor. now we will get the base and sub , both consrtuctors.